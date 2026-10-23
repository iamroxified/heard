<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ManagesUploads;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeamMemberController extends Controller
{
    use ManagesUploads;

    public function index(): View
    {
        return view('admin.team.index', [
            'teamMembers' => $this->teamMembers(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'team_members' => ['nullable', 'array', 'max:12'],
            'team_members.*.name' => ['required', 'string', 'max:255'],
            'team_members.*.role' => ['required', 'string', 'max:255'],
            'team_members.*.image' => ['nullable', 'string', 'max:2048'],
            'team_members.*.photo' => ['nullable', 'image', 'max:4096'],
            'team_members.*.linkedin' => ['nullable', 'url', 'max:2048'],
            'team_members.*.email' => ['nullable', 'email', 'max:255'],
        ]);

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

        $this->saveTeamMembers($teamMembers);

        return redirect()->route('admin.team.index')->with('success', 'Team members updated.');
    }

    private function teamMembers(): array
    {
        $value = Setting::where('key', 'team_members')->value('value');

        if ($value === null) {
            return config('site.team_members', []);
        }

        $decoded = json_decode($value, true);

        return json_last_error() === JSON_ERROR_NONE && is_array($decoded) ? $decoded : [];
    }

    private function saveTeamMembers(array $teamMembers): void
    {
        Setting::updateOrCreate(
            ['key' => 'team_members'],
            ['value' => json_encode($teamMembers)]
        );
    }
}
