@extends('layouts.app')
<x-header />

    @auth
      @if (Auth::user()->name == 'Admin')
        <section class="alert alert-secondary d-flex justify-content-around"> 
          <a class="btn btn-outline-secondary" href="{{ route('home') }}">Next Courses</a>
          <a class="btn btn-outline-secondary" href="{{ route('admin.index') }}">My Dashboard</a>
          <a class="btn btn-outline-secondary" href="{{ route('home') }}">Past Courses</a>
        </section>
        @endif
        @if (Auth::user()->name != 'Admin')
          <section class="alert alert-secondary d-flex justify-content-around"> 
              <a class="btn btn-outline-secondary" href="{{ route('home') }}">Next Courses</a>
              <a class="btn btn-outline-secondary" href="{{ route('home') }}">My Courses</a>
              <a class="btn btn-outline-secondary" href="{{ route('home') }}">Past Courses</a>
        </section>
        @endif
    @endauth


@section('content')

  <main class="py-4">
    


  <x-slider />
    




    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">  <!-- containers de articulos destacados -->
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-around">
        @foreach ($events as $event)
            <x-eventCard :event='$event' />
        @endforeach

      </div><!-- /.row -->
    </div>

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider ">

    <div class="row featurette d-flex justify-content-around">
      <div class="col-md-7">
        <h2 class="featurette-heading ">
          Businesses large and small trust <b>Crada Tech-Events</b> 
          to scale their business. <span class="text-muted">Learn from true experts.</span></h2>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://codewithmosh-assets.netlify.app/why-expert.4b07f585.png" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
  </main>
    <x-footer />
    @endsection













