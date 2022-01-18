
 <?php
 use Carbon\Carbon;
 use Carbon\CarbonTimeZone;
 
 $tz = CarbonTimeZone::create('Europe/Madrid');
 $date = Carbon::now($tz);
 ?>
 @extends('layouts.app')

 @section('content')
 <x-header/>
 @auth
 @if (Auth::user()->name == 'Admin')
 <section class="alert alert-secondary d-flex justify-content-around">  
  <h1 clpss="btn btn-outline-secondary">Next Events</h1>
   <a class="btn btn-outline-secondary" href="{{ route('admin.index') }}"> Dashboard</a>
   
 </section>
 @endif
 @if (Auth::user()->name != 'Admin')
   <section class="alert alert-secondary d-flex justify-content-around"> 
    <h1 clpss="btn btn-outline-secondary">Next Events</h1>
     <a class="btn btn-outline-secondary" href="{{ route('home') }}"> Courses</a>
  @endif
@endauth
 </section>
    
 <br><br>
 <div class="container">
   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-around">
   @foreach ($events as $event)
   @if ($event->date_time > $date)
   <x-eventCard :event='$event' />
   @endif
   @endforeach
  </div>
</div>
 @endsection
