@extends('layouts.app')
<x-header />

    @auth
        <section class="alert alert-secondary d-flex justify-content-around"> 
            <a class="btn btn-outline-secondary" href="{{ route('home') }}">Next Courses</a>
            <a class="btn btn-outline-secondary" href="{{ route('home') }}">My Courses</a>
            <a class="btn btn-outline-secondary" href="{{ route('home') }}">Past Courses</a>
       </section>
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
          <img class="bd-placeholder-img" width="100%" height="100%" src="https://2.bp.blogspot.com/-6NxUmY-aZp8/UYfiaj_9o9I/AAAAAAAABV0/alUMUycPe5o/s1600/Fondo+HD+para+bajar+-+WiriWiri_info+-+(90).png" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>The Ultimate Docker Course</h1>
                <p>Everything you need to master Docker in one clear, concise, and practical course.</p>
                <p><a class="btn btn-outline-light" href="{{route('home') }}">Sign up today</a></p>
              </div>
            </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img opacity-10" width="100%" height="100%" src="http://cdn26.us1.fansshare.com/photo/darkwallpapers/dark-color-hd-background-dark-colour-wallpapers-1561678654.jpg" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="container">
              <div class="carousel-caption">
                <h1>The Ultimate React Native Series</h1>
                <p>Everything you need to build and distribute professional-quality apps with React Native.</p>
                <p><a class="btn btn-outline-light" href="{{route('home') }}">Learn more</a></p>
              </div>
            </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" src="https://c4.wallpaperflare.com/wallpaper/302/444/11/matrix-desktop-backgrounds-wallpaper-preview.jpg" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>The Ultimate Redux Course</h1>
                <p>Go from beginner to expert in 6 hours. Everything you need to build modern apps with Redux.</p>
                <p><a class="btn btn-outline-light" href="{{route('home') }}">Browse gallery</a></p>
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


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">  <!-- containers de articulos destacados -->
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-around">
        <!--foreach-->
        @include('components.eventCard')
        <!--foreachend-->

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













