@extends('layouts.app')
<x-header />

@section('content')

<main class="py-4">

<h1>Dashboard</h1>
<a href="{{ route('events.create') }}">New Event</a>

  <div class="container">  <!-- containers de articulos destacados -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-around">
      <!--foreach-->
      @include("components.eventcard_admin")
      <!--foreachend-->

    </div><!-- /.row -->
  </div>
  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
</main>
  <x-footer />
  @endsection