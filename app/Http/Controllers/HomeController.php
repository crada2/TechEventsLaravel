<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $user = User::find(Auth::id());
        $event = Event::find($id);
        $totalusers = Event::eventVacancy($event);
        $inscription = Event::checkEnrollment($user, $event);

        if ($totalusers < $event->users_max && !$inscription) {
            $user->event()->attach($event);
        }
        return redirect()->route('home');
    }
}
