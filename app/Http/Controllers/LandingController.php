<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        $events = Event::orderBy('date_time', 'ASC')->get();
        return view('landing', ['events'=>$events]);
    }
    
    

    public function admin(){
        $events= Event::orderBy('date_time', 'ASC')->get();
        return view('admin.index', ['events' => $events]);
    }


  
  
}
