<?php

namespace App\Http\Controllers\Admin\Concerns;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RuntimeException;

trait ManagesUploads
{
    protected function storeUpload(?UploadedFile $file, string $directory, ?string $existingPath = null): ?string
    {
        if (! $file) {
            return $existingPath;
        }

        $path = $file->store($directory, 'public');

        if (! $path) {
            throw new RuntimeException("Failed to store uploaded file in the [$directory] directory.");
        }

        if ($existingPath && ! Str::startsWith($existingPath, ['http://', 'https://'])) {
            Storage::disk('public')->delete($existingPath);
        }

        return $path;
    }

    protected function deleteUpload(?string $path): void
    {
        if ($path && ! Str::startsWith($path, ['http://', 'https://'])) {
            Storage::disk('public')->delete($path);
        }
    }

    protected function makeSlug(string $value): string
    {
        return Str::slug($value);
    }
}
