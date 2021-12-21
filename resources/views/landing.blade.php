@extends('layouts.app')

@section('content')

    <x-header />
    <main class="py-4">

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="bd-placeholder-img" width="100%" height="100%" src="https://ak.picdn.net/shutterstock/videos/1009948880/thumb/1.jpg" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>The Ultimate Docker Course</h1>
              <p>Everything you need to master Docker in one clear, concise, and practical course.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" src="https://p4.wallpaperbetter.com/wallpaper/123/76/21/minimalism-gradient-pink-orange-wallpaper-preview.jpg" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

          <div class="container">
            <div class="carousel-caption">
              <h1>The Ultimate React Native Series</h1>
              <p>Everything you need to build and distribute professional-quality apps with React Native.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="100%" src="https://ak.picdn.net/shutterstock/videos/1012174943/thumb/1.jpg" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>The Ultimate Redux Course</h1>
              <p>Go from beginner to expert in 6 hours. Everything you need to build modern apps with Redux.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Browse gallery</a></p>
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
        @foreach ($events as $event)
        <x-eventCard :event='$event' />
        @endforeach
        <!--foreachend-->
      </div><!-- /.row -->
    </div>

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">MASTER A TOP CODER MINDSET. <span class="text-muted">Learn from a True Expert.</span></h2>
        <p class="lead">Benefit from Mosh's two decades of experience in the industry. Not only does he explain the whats, whys, and hows, he also shares tons of tips and tricks that help you code faster and with more confidence. Something that would take you years to learn on the job.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://codewithmosh-assets.netlify.app/why-expert.4b07f585.png" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">WORLD-CLASS QUALITY VIDEOS. <span class="text-muted">Fun and Engaging Lessons.</span></h2>
        <p class="lead">Mosh is a perfectionist and is fully obsessed with the quality of his videos. Beautiful graphics, slides, and animations help you stay focused, remember, and better understand the materials.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://codewithmosh-assets.netlify.app/why-engaging.0b5dcedd.png" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
  </main>
    <x-footer />
    @endsection
