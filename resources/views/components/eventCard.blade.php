@props(['event'])



<div class="card  border-light" style="width: 18rem;">

 <img src="{{asset('/storage/image/event/'.$event->img)}}"  class="border border-5 rounded-3" alt="...">
  <div class="card-body">
   <h2><b class="card-text">{{$event->title}}</b> </h2>
   <p class="card-text  p-3 mb-2 bg-light text-dark "><i>⭐  {{ $event->name }}</i> </p>
  <p class="card-text ">{{$event->text}}</p>
   <p class="card-date"><i>{{$event->date_time}}</i> </p>


    <form class="card-text p-3 mb-2 bg-light text-dark" action="/events/{{ $event->id }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-outline-danger">Delete</button>
     
      <a type="submit" class="btn btn-outline-success"  href="{{route('home') }}">Enroll in Course</a>
     
    
    
    </form>
  </div>
</div>
