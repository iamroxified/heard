<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use App\Models\Event;
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

        // Seed Events
        Event::updateOrCreate(
            ['slug' => 'omniverse-africa-summit-3-0'],
            [
                'name' => 'Omniverse Africa Summit 3.0',
                'type' => 'upcoming',
                'event_date' => '2026-11-12',
                'location' => 'Lagos, Nigeria',
                'short_description' => 'One of Africa\'s most ambitious pan-continental summits, bringing together technology leaders, policy makers, investors, creative economy innovators, and global partners across four days of programming.',
                'full_description' => 'Heard In Africa is the official program design partner for Omniverse Africa Summit 3.0. We manage end-to-end speaker placement, curate specific agenda tracks (Monetisation Day, Narrative Day), and ensure flawless execution.',
                'featured_image_path' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                'speaker_highlights' => 'Chimfumnanya Nwandu, Ndidi Nwuneli, Bosun Tijani',
                'registration_link' => 'https://theomniverse.africa',
                'is_featured' => true,
            ]
        );

        Event::updateOrCreate(
            ['slug' => 'pan-african-leadership-forum'],
            [
                'name' => 'Pan-African Leadership Forum',
                'type' => 'upcoming',
                'event_date' => '2026-12-05',
                'location' => 'Nairobi, Kenya',
                'short_description' => 'An exclusive gathering of corporate executives, development partners, and public sector leaders discussing sustainable growth models and intra-African trade.',
                'full_description' => 'A strategic forum focusing on leadership practices, collaborative governance, and financial solutions for the next decade of African expansion.',
                'featured_image_path' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'speaker_highlights' => 'Akinwumi Adesina, Patrick Njoroge',
                'registration_link' => 'https://example.com/leadership-forum',
                'is_featured' => false,
            ]
        );

        Event::updateOrCreate(
            ['slug' => 'fintribe-women-in-finance-summit-2025'],
            [
                'name' => 'FinTribe Women in Finance Summit 2025',
                'type' => 'past',
                'event_date' => '2025-10-18',
                'location' => 'Victoria Island, Lagos',
                'short_description' => 'The premier gathering for African women in finance, investment, and wealth management, focusing on continental economic growth.',
                'full_description' => 'Empowering African women through financial literacy, leadership growth, and venture capital opportunities in emerging markets.',
                'featured_image_path' => 'https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'speaker_highlights' => 'Ibukun Awosika, Toyin Sanni',
                'registration_link' => null,
                'is_featured' => false,
            ]
        );

        Event::updateOrCreate(
            ['slug' => 'tedxnza-street-2025'],
            [
                'name' => 'TEDxNzaStreet 2025',
                'type' => 'past',
                'event_date' => '2025-08-22',
                'location' => 'Enugu, Nigeria',
                'short_description' => 'An independently organized TED event focusing on local ideas, community-led innovation, and cultural preservation.',
                'full_description' => 'Showcasing Enugu\'s finest minds, TEDxNzaStreet provided a platform for narratives of resilience, tech application, and cultural export.',
                'featured_image_path' => 'https://images.unsplash.com/photo-1475721025871-8848135cb17c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'speaker_highlights' => 'Nana Nwandu, local innovators',
                'registration_link' => null,
                'is_featured' => false,
            ]
        );
    }
}
