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
        //para añadirlo
        $user->likes()->attach($event);
        $this->assertEquals(1, $user->likes()->count());
        //para quitarlo
        $user->likes()->detach($event);
        $this->assertEquals(0, $user->likes()->count());
    }

    public function test_know_user_like_an_event()
    {
        $user = User::factory()->create();
        $event = Event::factory()->create();
        $user->likes()->attach($event);
        //  dd($user->likes()->find(1)); para saber si te encuentra el id

        //devuelve true 
        $this->assertTrue($user->isLikeIt($event));
        //devuelve  false
        $user->likes()->detach($event);
        $this->assertFalse($user->isLikeIt($event->id));
    }
}
