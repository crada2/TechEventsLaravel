<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Mail\SendCourse;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Http\Request;


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
    public function index()
    {
        $events = [];

        if (Auth::user()) {
            $user = Auth::user();
            $events = $user->event;
        }
        return view('home', ['events' => $events]);
    }

    public function enroll($id) {
        $user = User::find(Auth::id());
        $event = Event::find($id);

        $usercount = Event::eventVacancy($event);
        $inscription = Event::checkEnrollment($user, $event);

        if ($usercount < $event->users_max && !$inscription) {
            $user->event()->attach($event);

            $username = $user->name;
            $correo = new SendCourse ($username, $event);
            Mail::to($user->email)->send($correo);
        }
        return redirect()->route('home');
    }

    public function unsubscribe($id) {
        $user = User::find(Auth::id());
        $event = Event::find($id);

        $user->event()->detach($event);
        return redirect()->route('home');
    }

}
