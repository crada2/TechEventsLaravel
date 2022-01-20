<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Event;
use App\Models\User;
use Tests\TestCase;

class HomeController extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_no_login_under_can_not_enroll()
    {
        User::factory()->create();
        $event=Event::factory()->create();
        $response = $this->get(route("home",$event->id));

        $response->assertStatus(302)
                ->assertRedirect("/login");
    }

    public function test_users_cant_enroll_on_full_event()
    {
        $event = Event::factory()->create(['users_max' => 0]);
        $user = User::factory()->create();

        $this->actingAs($user);
        $this->get(route("enroll", $event->id));

        $usercount = Event::checkEnrollment($user, $event);

        $this->assertEquals(0, $usercount);
    }

    public function test_students_can_unsubscribe_from_an_event()
    {
        $user = User::factory()->create();
        $event = Event::factory()->create();

        $event->enroll($user->id);
        $event->unsubscribe($user->id);

        $this->assertEquals(0, $user->event()->detach($event));
    }
}
