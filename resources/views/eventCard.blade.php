@props(['event'])
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