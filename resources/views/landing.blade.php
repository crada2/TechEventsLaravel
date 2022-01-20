<style>
.title_init{
    color:#323334;
}
.subtitle{
    color:#323334;
}

</style>
<?php

use Carbon\Carbon;
use Carbon\CarbonTimeZone;

$tz = CarbonTimeZone::create('Europe/Madrid');
$date = Carbon::now($tz);
?>

@extends('layouts.app')
<x-header />

@auth
@if (Auth::user()->name == 'Admin')
<section class="alert alert-secondary d-flex justify-content-around">
  <a class="btn btn-outline-secondary" href="{{ route('pastEvents') }}">Past Courses</a>
  <a class="btn btn-outline-secondary" href="{{ route('admin.index') }}">My Dashboard</a>
  <a class="btn btn-outline-secondary" href="{{ route('nextEvents') }}">Next Courses</a>
</section>
@endif
@if (Auth::user()->name != 'Admin')
<section class="alert alert-secondary d-flex justify-content-around">
  <a class="btn btn-outline-secondary" href="{{ route('pastEvents') }}">Past Courses</a>
  <a class="btn btn-outline-secondary" href="{{ route('home') }}">My Courses</a>
  <a class="btn btn-outline-secondary" href="{{ route('nextEvents') }}">Next Courses</a>

</section>
@endif
@endauth


@section('content')

<main class="py-4">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://img.freepik.com/vector-gratis/fondo-degradado-tonos-verdes_23-2148373476.jpg?size=626&ext=jpg" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="title_init">The Ultimate Docker Coursee</h1>
            <p class="subtitle">Everything you need to master Docker In one clear, concise, and practical course.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img opacity-10" width="100%" height="100%" src="https://img.freepik.com/vector-gratis/textura-granulada-degradada_23-2148987745.jpg?size=626&ext=jpg" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="title_init">The Ultimate React Native Series</h1>
            <p class="subtitle">Everything you need to build and distribute professional-quality apps with React Native.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://i0.wp.com/hipertextual.com/wp-content/uploads/2017/03/color-degradado-fondos-degradados-multicolor-51200.jpg?fit=1200%2C750&ssl=1" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="title_init">The Ultimate Redux Course</h1>
            <p class="subtitle">Go from beginner to expert in 6 hours. Everything you need to build modern apps with Redux.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- top eventos -->
  <hr class="featurette-divider">
  <div class="d-flex row">
    <h1 class="title d-flex justify-content-center">TOP EVENTS</h1>
    <div class="container">
      <br>
      <!-- containers de articulos destacados -->
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-around">
        @foreach ($events as $event)
        @if($event->likesCount())
        <x-slider :event='$event' />
        @endif
        @endforeach
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="container">
    <h1 class="title d-flex justify-content-center">VIEW ALL COURSES</h1>
    <br>
    <!-- containers de articulos destacados -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-around">
      @foreach ($events as $event)
      @if ($event->date_time > $date)
      <x-eventCard :event='$event' />
      @endif
      @endforeach
    </div>
    <br><br>
  </div>
  <hr class="featurette-divider">
  </div><!-- /.container -->
</main>
<x-footer />

@endsection
