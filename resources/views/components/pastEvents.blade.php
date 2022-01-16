<?php
use Carbon\Carbon;
use Carbon\CarbonTimeZone;

$tz = CarbonTimeZone::create('Europe/Madrid');
$date = Carbon::now($tz);
?>


@foreach ($events as $event)
    @if ($event->date_time < $date)

        <div class="card border-light " style="width: 18rem;">
            <img src="{{asset('/storage/image/event/'.$event->img)}}"  class="border border-5 rounded-3" alt="Card image cap">
            <div class="card-body">
                <h2><b class="card-text d-flex justify-content-center ">{{$event->title}}</b> </h2>
                <p class="card-text  p-3 mb-2 bg-light text-dark d-flex justify-content-center "><i> ⭐ ⭐ ⭐ ⭐  {{ $event->name }}</i> </p>
                <p class="card-text ">{{$event->text}}</p>
                <p class="text-danger card-date"><i>⌛ {{$event->date_time}}</i>  <a type="submit" class="btn btn-outline-light" href="{{route('show', ['id'=>$event->id])}}">🔍</a></p>
            <div class="d-flex justify-content-around">
            </div>
            </div>
        </div>


    @endif
@endforeach