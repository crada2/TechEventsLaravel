<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Mail\SendCourse;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $events = Event::all();
        $events = Event::orderBy('date', 'asc')->get();

        return view('landing', [
            'events' => $events, 
            'highlightedEvents' => Event::highlightedEvents()
        ]);
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
        $eventToUpdate->users_max = $request->input('users_max');

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

    public function pastEvents() 
    {
        $events = Event::orderBy('date_time', 'ASC')->get();
        return view('components.pastEvents', ['events'=>$events]);
    } 

    public function nextEvents() 
    {
        $events = Event::orderBy('date_time', 'ASC')->get();
        return view('components.nextEvents', ['events'=>$events]);
    } 
    public function like($id) {
        if(Auth::user()-> isLikeIt($id)) return back();
        Auth::user()->likes()->attach($id);
        return back();
    } 
}
