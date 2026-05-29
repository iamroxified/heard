<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@heardinafrica.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'is_admin' => true,
            ]
        );

        Setting::updateOrCreate(['key' => 'homepage_client_logos'], ['value' => json_encode(['Omniverse Africa Summit', 'Corporate Leadership Forum', 'Pan-African Forum'])]);
        Setting::updateOrCreate(['key' => 'homepage_video_url'], ['value' => 'https://cdn.pixabay.com/video/2020/05/21/40003-424177579_large.mp4']);
        Setting::updateOrCreate(['key' => 'calendar_booking_url'], ['value' => 'https://calendly.com/heardinafrica/discovery-call']);
        Setting::updateOrCreate(['key' => 'contact_phone'], ['value' => '+234-815-851-2911']);
        Setting::updateOrCreate(['key' => 'contact_email'], ['value' => 'Info@heardinafrica.com']);
        Setting::updateOrCreate(['key' => 'newsletter_provider'], ['value' => 'Mailchimp']);
        Setting::updateOrCreate(['key' => 'newsletter_enabled'], ['value' => 'yes']);
    }
}
