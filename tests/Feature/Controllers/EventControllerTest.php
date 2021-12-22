<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
    public function test_no_login_under_can_not_inscription()
    {
        User::factory()->create();
        $event=Event::factory()->create();
        
        $response = $this->get(route('home',$event->id));

        $response->assertStatus(302)
                ->assertRedirect("/login");
    }         

}
