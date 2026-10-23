<?php

namespace Tests\Feature\Admin;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\View;
use Tests\TestCase;

class TeamMembersSettingsTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_update_team_members_displayed_on_about_page(): void
    {
        $teamMembers = [
            [
                'name' => 'Amina Example',
                'role' => 'Programme Director',
                'image' => 'img/amina.jpg',
                'linkedin' => 'https://www.linkedin.com/in/amina-example',
                'email' => 'amina@example.com',
            ],
        ];

        $admin = User::factory()->create(['is_admin' => true]);

        $this->actingAs($admin)
            ->put(route('admin.team.update'), ['team_members' => $teamMembers])
            ->assertRedirect(route('admin.team.index'));

        $this->assertSame($teamMembers, json_decode(Setting::where('key', 'team_members')->value('value'), true));

        $this->get(route('admin.team.index'))
            ->assertOk()
            ->assertSee('Amina Example')
            ->assertSee('Programme Director');

        View::share('siteSettings', ['team_members' => $teamMembers]);

        $this->get(route('about'))
            ->assertOk()
            ->assertSee('Amina Example')
            ->assertSee('Programme Director');
    }

    public function test_team_management_requires_admin_authentication(): void
    {
        $this->get(route('admin.team.index'))
            ->assertRedirect(route('login'));
    }
}
