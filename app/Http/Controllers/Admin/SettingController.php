<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ManagesUploads;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    use ManagesUploads;

    public function edit(): View
    {
        return view('admin.settings.edit', [
            'settings' => [
                'homepage_client_logos' => $this->getValue('homepage_client_logos', []),
                'homepage_video_url' => $this->getValue('homepage_video_url', ''),
                'calendar_booking_url' => $this->getValue('calendar_booking_url', ''),
                'contact_phone' => $this->getValue('contact_phone', '+234-815-851-2911'),
                'contact_email' => $this->getValue('contact_email', 'Info@heardinafrica.com'),
                'team_members' => $this->getValue('team_members', config('site.team_members', [])),
                'newsletter_provider' => $this->getValue('newsletter_provider', 'Mailchimp'),
                'newsletter_enabled' => $this->getValue('newsletter_enabled', 'yes'),
            ],
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'homepage_client_logos' => ['nullable', 'string'],
            'homepage_video_url' => ['nullable', 'url'],
            'calendar_booking_url' => ['nullable', 'url'],
            'contact_phone' => ['nullable', 'string', 'max:50'],
            'contact_email' => ['nullable', 'email', 'max:255'],
            'team_members' => ['nullable', 'array', 'max:12'],
            'team_members.*.name' => ['required', 'string', 'max:255'],
            'team_members.*.role' => ['required', 'string', 'max:255'],
            'team_members.*.image' => ['nullable', 'string', 'max:2048'],
            'team_members.*.photo' => ['nullable', 'image', 'max:4096'],
            'team_members.*.linkedin' => ['nullable', 'url', 'max:2048'],
            'team_members.*.email' => ['nullable', 'email', 'max:255'],
            'newsletter_provider' => ['nullable', 'string', 'max:255'],
            'newsletter_enabled' => ['nullable', 'string', 'max:20'],
        ]);

        $this->setValue('homepage_client_logos', array_values(array_filter(array_map('trim', explode(',', $data['homepage_client_logos'] ?? '')))));
        $this->setValue('homepage_video_url', $data['homepage_video_url'] ?? '');
        $this->setValue('calendar_booking_url', $data['calendar_booking_url'] ?? '');
        $this->setValue('contact_phone', $data['contact_phone'] ?? '');
        $this->setValue('contact_email', $data['contact_email'] ?? '');
        $teamMembers = [];
        foreach ($data['team_members'] ?? [] as $index => $member) {
            if (! filled($member['name'] ?? null) || ! filled($member['role'] ?? null)) {
                continue;
            }

            if ($photo = $request->file("team_members.$index.photo")) {
                $member['image'] = $this->storeUpload($photo, 'team', $member['image'] ?? null);
                if (! $member['image']) {
                    return back()->withErrors([
                        "team_members.$index.photo" => 'The team member photo could not be saved. Please try again.',
                    ])->withInput();
                }
            }

            unset($member['photo']);
            $teamMembers[] = $member;
        }
        $this->setValue('team_members', $teamMembers);
        $this->setValue('newsletter_provider', $data['newsletter_provider'] ?? '');
        $this->setValue('newsletter_enabled', $data['newsletter_enabled'] ?? 'yes');

        return redirect()->route('admin.settings.edit')->with('success', 'Settings updated.');
    }

    private function getValue(string $key, mixed $default): mixed
    {
        $value = Setting::where('key', $key)->value('value');

        if ($value === null) {
            return $default;
        }

        $decoded = json_decode($value, true);

        return json_last_error() === JSON_ERROR_NONE ? $decoded : $value;
    }

    private function setValue(string $key, mixed $value): void
    {
        Setting::updateOrCreate([
            'key' => $key,
        ], [
            'value' => is_array($value) ? json_encode($value) : $value,
        ]);
    }
}
