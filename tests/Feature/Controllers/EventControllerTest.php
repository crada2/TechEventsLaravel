<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;

class EventControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_can_create_an_event()
    {
        $admin = User::factory()->create(["isAdmin" => true]);
        $event = Event::factory()->create();

        $response = $this->actingAs($admin)->get(route("events.create", $event->id));
        $response->assertStatus(200)->assertViewIs('admin.eventForm');
    }

    public function test_admin_can_edit_event()
    {
        $admin = User::factory()->create(["isAdmin" => true]);
        $event = Event::factory()->create();

        $response = $this->actingAs($admin)->get(route("edit", $event->id));
        $response->assertStatus(200)->assertViewIs('admin.editEventform');
    }

    public function test_admin_can_update_event()
    {
        $admin = User::factory()->create(["isAdmin" => true]);
        $event = Event::factory()->create();

        $response = $this->actingAs($admin)->get(route("update", $event->id));
        $response->assertStatus(200)->assertViewIs('admin.editEventform');
    }
}
