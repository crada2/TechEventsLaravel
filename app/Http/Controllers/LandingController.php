<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('landing', ['events'=>$events]);
    }
}
