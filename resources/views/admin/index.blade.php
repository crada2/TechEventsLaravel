@extends('layouts.app')
<x-header />

@section('content')

<main class="py-4">
  <section class="alert alert-secondary d-flex justify-content-around">  
    {{-- <a class="btn btn-outline-secondary" href="{{ route('landing') }}">Back</a> --}}
    <h2>Dashboard</h2>
    <a class="btn btn-outline-secondary" href="{{ route('events.create') }}">New Event</a>
  </section>




  <div class="container">  <!-- containers de articulos destacados -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-around">
      
      @foreach ($events as $event)
        
          @include("components.eventcard_admin")
     
      @endforeach 

    </div><!-- /.row -->
  </div>
  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
</main>
  <x-footer />
  @endsection