<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandingControllerTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_any_user_can_see_a_landing_page()
    {
        $response = $this->get(route('landing'));

        $response->assertStatus(200)
        ->assertViewIs('landing');
    }
}

