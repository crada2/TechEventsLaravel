<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('eventForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = [

           'title' => $request->title,
           'img' => $request->img,
           'text' => $request->text,
           'date_time' => $request->date_time,
           'user_id' => Auth::user()->id
       ];
       //$data =$request->all();
        //dd($request->hasFile('img'));
        if( $request->hasFile('img') ) {
            $file = $request->file('img');
            $destinationPath = 'featured/images/';
            $filename = $file->getClientOriginalName();
            $uploadSuccess = $request->file('img')->move($destinationPath, $filename);
            $img = $destinationPath . $filename;
        }

       Event::create($data);
       return redirect(route('landing'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $eventToDelete = Event::findOrFail($id);
        if (Auth::id() != $eventToDelete->author->id)
        {
            return back();
        }

        $eventToDelete->delete();
      //  Event::destroy(($id));
        return back();
    }
}
