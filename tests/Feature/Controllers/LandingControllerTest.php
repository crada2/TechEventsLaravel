<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;

class LandingControllerTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_a_landing_page()
    {
        $response = $this->get(route('landing'));

        $response->assertStatus(200)
        ->assertViewIs('landing');
    }

    public function test_any_user_can_see_list_events_future()
    {
        User::factory()->create();
        //crear 2 Eventos en la db con factoria
        $events=Event::factory(2)->create();
        
        //when SUT llamar una ruta (web.php)
        $response = $this->get(route('landing'));

        //then
        $response->assertSee($events[0]->title)
                    ->assertSee($events[1]->title);
                    

    }

    


}

