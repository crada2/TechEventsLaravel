<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('landing', ['events'=>$events]);
    }

    public function admin(){
        $events= Event::all();
        return view('admin.index', ['events' => $events]);
    }
}
