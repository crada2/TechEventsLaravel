<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_like_an_event()
    {
        $user = User::factory()->create();
        $event = Event::factory()->create();

        $user-> likes()->attach($event);
        $this->assertEquals(1, $user->likes()->count());
       
    }
    
}
