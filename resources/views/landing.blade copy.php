<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/5.1/examples/carousel/ -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Tech-Events</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



  <!-- Bootstrap core CSS -->
  <link href="{{asset('events-css/bootstrap.min.css')}}" rel="stylesheet"> 

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="events-css/carousel.css" rel="stylesheet"> <!-- link boostrap??????-->
</head>

<body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Crada</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

  <main>

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
        <div class="card " style="width: 18rem;">
          <img src="{{$event->img}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$event->title}}</h5>
            <p class="card-text">{{$event->text}}</p>
            <p class="card-date">{{$event->date_time}}</p>
            <a href="#" class="btn btn-primary">Enroll in Course</a>
            <form action="/events/{{ $event->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-secondary">Delete</button>
          </form>
          </div>
        </div>
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


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Back to top</a></p>
      <p>© 2017–2021 Company, Inc. · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Privacy</a> · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Terms</a></p>
    </footer>
  </main>


  <script src="events-css/bootstrap.bundle.min.js" ></script>




</body>

</html>