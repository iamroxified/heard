#!/bin/bash

set -eu

APP_PATH="/home/heardina/test.heardinafrica.com"
WEB_ROOT="/home/heardina/public_html"
REPO_ROOT="$(git -C "$(dirname "$0")/.." rev-parse --show-toplevel)"

if [ "$APP_PATH" = "$WEB_ROOT" ]; then
    echo "Laravel application path and public document root must be separate." >&2
    exit 1
fi

if [ ! -f "$APP_PATH/artisan" ] || [ ! -f "$APP_PATH/composer.json" ]; then
    echo "Missing Laravel application files in $APP_PATH; refusing deployment." >&2
    exit 1
fi

if [ ! -f "$APP_PATH/.env" ]; then
    echo "Missing production environment file at $APP_PATH/.env; refusing deployment." >&2
    exit 1
fi

if [ ! -f "$REPO_ROOT/deploy/cpanel-index.php" ]; then
    echo "Missing public front-controller template in the checked-out repository." >&2
    exit 1
fi

if ! command -v rsync >/dev/null 2>&1; then
    echo "rsync is required to deploy this application on cPanel." >&2
    exit 1
fi

if ! command -v composer >/dev/null 2>&1; then
    echo "Composer is required to install production dependencies." >&2
    exit 1
fi

if [ -L "$WEB_ROOT/storage" ]; then
    STORAGE_TARGET="$(readlink "$WEB_ROOT/storage")"
    if [ "$STORAGE_TARGET" != "$APP_PATH/storage/app/public" ]; then
        echo "The existing $WEB_ROOT/storage link points elsewhere; refusing to replace it." >&2
        exit 1
    fi
elif [ -e "$WEB_ROOT/storage" ]; then
    echo "$WEB_ROOT/storage already exists and is not the expected symlink; preserve its contents and fix it manually." >&2
    exit 1
fi

mkdir -p \
    "$APP_PATH/bootstrap/cache" \
    "$APP_PATH/storage/app/private" \
    "$APP_PATH/storage/app/public" \
    "$APP_PATH/storage/framework/cache/data" \
    "$APP_PATH/storage/framework/sessions" \
    "$APP_PATH/storage/framework/views" \
    "$APP_PATH/storage/logs" \
    "$WEB_ROOT"

if [ "$REPO_ROOT" != "$APP_PATH" ]; then
    rsync -a \
        --exclude='/.git/' \
        --exclude='/.env' \
        --exclude='/vendor/' \
        --exclude='/node_modules/' \
        --exclude='/storage/' \
        --exclude='/public/storage' \
        "$REPO_ROOT/" "$APP_PATH/"
fi

composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader \
    --working-dir="$APP_PATH"

if [ ! -f "$APP_PATH/public/build/manifest.json" ]; then
    echo "Missing Vite build manifest at $APP_PATH/public/build/manifest.json." >&2
    exit 1
fi

rsync -a \
    --exclude='/index.php' \
    --exclude='/storage' \
    "$APP_PATH/public/" "$WEB_ROOT/"

cp "$REPO_ROOT/deploy/cpanel-index.php" "$WEB_ROOT/index.php"

if [ ! -e "$WEB_ROOT/storage" ] && [ ! -L "$WEB_ROOT/storage" ]; then
    ln -s "$APP_PATH/storage/app/public" "$WEB_ROOT/storage"
fi

php "$APP_PATH/artisan" optimize:clear
