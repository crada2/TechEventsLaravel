<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>The Ultimate Docker Course</h1>
                <p>Everything you need to master Docker in one clear, concise, and practical course.</p>
                <p><a class="btn btn-outline-light" href="{{route('show', ['id'=>$event->id]) }}">Sign up today</a></p>
              </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption">
                <h1>The Ultimate React Native Series</h1>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-around">
        @foreach ($events as $event)
            <x-eventCard :event='$event' />
        @endforeach

      </div>
                <p><a class="btn btn-outline-light" href="{{route('show', ['id'=>$event->id]) }}">Learn more</a></p>
              </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>The Ultimate Redux Course</h1>
                <p>Go from beginner to expert in 6 hours. Everything you need to build modern apps with Redux.</p>
                <p><a class="btn btn-outline-light" href="{{route('show', ['id'=>$event->id]) }}">Browse gallery</a></p>
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