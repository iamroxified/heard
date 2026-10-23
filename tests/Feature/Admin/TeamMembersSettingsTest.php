<?php

namespace Tests\Feature\Admin;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
            ->patch(route('admin.settings.update'), ['team_members' => $teamMembers])
            ->assertRedirect(route('admin.settings.edit'));

        $this->assertSame($teamMembers, json_decode(Setting::where('key', 'team_members')->value('value'), true));

        $this->get(route('admin.settings.edit'))
            ->assertOk()
            ->assertSee('Amina Example')
            ->assertSee('Programme Director');
    }
}
