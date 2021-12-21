@props(['event'])
<div class="card " style="width: 18rem;">
  <img src="{{$event->img}}" class="card-img-top" alt="...">
  <div class="card-body">
   <h5 class="card-title">{{$event->title}}</h5>
   <p class="card-text">{{ $event->author->name }}</p>
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