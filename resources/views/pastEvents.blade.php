
<?php
use Carbon\Carbon;
use Carbon\CarbonTimeZone;
$timeZone = CarbonTimeZone::create('Europe/Madrid');
$date = Carbon::now($timeZone);
?>


@extends('layouts.app')
@section('content')


<x-header />

<section class="alert alert-secondary d-flex justify-content-around">  
  <a class="btn btn-outline-secondary" href="{{ route('landing') }}">Back</a>
  <h2>Past events:</h2>
</section>


@foreach ($events as $event)
@if ($event->date_time < $date)
<div class="card  border-light" style="width: 18rem;">
    <img src="{{asset('/storage/image/event/'.$event->img)}}"  class="border border-5 rounded-3" alt="...">
      <div class="card-body">
        <h2><b class="card-text d-flex justify-content-center ">{{$event->title}}</b> </h2>
        <p class="card-text  p-3 mb-2 bg-light text-dark d-flex justify-content-center "><i> ⭐ ⭐ ⭐ ⭐  {{ $event->name }}</i> </p>
        <p class="card-text ">{{$event->text}}</p>
        <p class="card-date"><i>{{$event->date_time}}</i> </p>
          <div class="d-flex justify-content-around">
            <a type="submit" class="btn btn-outline-info"  href="{{route('show',  ['id'=>$event->id]) }}">View</a>
          </div>
      </div>
</div>
@endif
<x-footer />

@endsection
