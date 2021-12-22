@props(['event'])



<div class="card  border-light" style="width: 18rem;">

 <img class="border border-5 rounded-3" src="{{$event->img}}"  alt="...">
  <div class="card-body">
   <h2><b class="card-text">{{$event->title}}</b> </h2>
   <p class="card-text  p-3 mb-2 bg-light text-dark "><i>⭐  {{ $event->author->name }}</i> </p>
  <p class="card-text ">{{$event->text}}</p>
   <p class="card-date"><i>{{$event->date_time}}</i> </p>


    <form class="card-text" action="/events/{{ $event->id }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-outline-danger">Delete</button>
      <button type="button" class="btn btn-outline-success">Enroll in Course</button>

    </form>
  </div>
</div>
