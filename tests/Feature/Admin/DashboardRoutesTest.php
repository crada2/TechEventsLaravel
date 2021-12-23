<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class DashboardRoutesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_user_redirects_to_login()
    {
        $response = $this->get(route('admin.index'));

        $response->assertRedirect(route('login'));
    }
    public function test_no_admin_user_redirects_to_landing()
    {
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->get(route('admin.index'));

        $response->assertRedirect(route('landing'));
    }
    public function test_admin_user_can_see_dashboard()
    {
        $this->withoutExceptionHandling();
        $admin = User::factory()->create(['isAdmin' => true]);
        $response = $this
            ->actingAs($admin)
            ->get(route('admin.index'));

        $response->assertStatus(200)
        ->assertViewIs('admin.index');
    }
}
