<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all()
        ->sortBy('date_time');

        $myeventuser = [];    
        if (Auth::user()) {
            $user=Auth::user();
            $myeventuser = $user->event;
        }

        $events = Event::totalEnrollees($events);
        $events = Event::ifEnrolled($events, $myeventuser);
    
        return view('landing', ['events' => $myeventuser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.eventForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
   
        if($request->hasFile('img'))
        {
            $destination_path ='public/image/event';
            $img = $request->file('img');
            $imgName = $img->getClientOriginalName();
            $path = $request->file('img')->storeAs($destination_path, $imgName);

            $data['img'] = $imgName;
        }

       Event::create($data);
       return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('show', ['event'=> $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventToEdit=Event::find($id);
        return view('admin.editEventform', ['event'=> $eventToEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $eventToUpdate = Event::find($id);
    
        $img = null;
   
        if($request->hasFile('img'))
        {
            $destination_path ='public/image/event';
            $img = $request->file('img');
            $imgName = $img->getClientOriginalName();
            $path = $request->file('img')->storeAs($destination_path, $imgName);

            $img = $imgName;
        }

        if ($img) $eventToUpdate->img = $img;
        $eventToUpdate->title= $request->input('title'); 
        $eventToUpdate->date_time = $request->input('date_time');
        $eventToUpdate->text = $request->input('text');

        $eventToUpdate->save();

        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $eventToDelete = Event::findOrFail($id);
      //  $eventToDelete->delete();
        Event::destroy(($id));
        return back();
    }

    public function enroll($id)
    {
        $user = User::find(Auth::id());
        $event = Event::find($id);
        $totalusers = Event::eventVacancy($event);
        $inscription = Event::checkEnrollment($user, $event);
    }
}
