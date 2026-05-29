<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('siteSettings', [
            'homepage_client_logos' => $this->settingValue('homepage_client_logos', ['Omniverse Africa Summit', 'Corporate Leadership Forum', 'Pan-African Forum']),
            'homepage_video_url' => $this->settingValue('homepage_video_url', 'https://cdn.pixabay.com/video/2020/05/21/40003-424177579_large.mp4'),
            'calendar_booking_url' => $this->settingValue('calendar_booking_url', 'https://calendly.com/heardinafrica/discovery-call'),
            'contact_phone' => $this->settingValue('contact_phone', '+234-815-851-2911'),
            'contact_email' => $this->settingValue('contact_email', 'Info@heardinafrica.com'),
        ]);
    }

    private function settingValue(string $key, mixed $default): mixed
    {
        if (! Schema::hasTable('settings')) {
            return $default;
        }

        $value = Setting::where('key', $key)->value('value');

        if ($value === null) {
            return $default;
        }

        $decoded = json_decode($value, true);

        return json_last_error() === JSON_ERROR_NONE ? $decoded : $value;
    }
}
