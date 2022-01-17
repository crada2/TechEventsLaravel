<div class="card  border-light" style="width: 18rem;">
  <img src="{{asset('/storage/image/event/'.$event->img)}}"  class="border border-5 rounded-3" alt="...">
  <div class="card-body">
    <h2><b class="card-text d-flex justify-content-center ">{{$event->title}}</b> </h2>
    <p class="card-text  p-3 mb-2 bg-light text-dark d-flex justify-content-center "><i> ⭐ ⭐ ⭐ ⭐  {{ $event->name }}</i> </p>
    <p class="card-text ">{{$event->text}}</p>
    <p class="card-date"><i>{{$event->date_time}}</i> </p>
    <b>Maximum users allowed: {{$event->users_max}}</b>
    <hr />
    @if ($event->user_count < $event->users_max)
    <p>{{$event->users_max-$event->user_count}}/{{$event->users_max}} free</p>
    <div class="d-flex justify-content-around">
      <form action="{{route('enroll', $event->id)}}" method="POST">
        @csrf 
        <button type="submit" class="btn btn-outline-success">Enroll in Course</button>
      </form>
      <a type="submit" class="btn btn-outline-light" href="{{route('show', ['id'=>$event->id])}}">🔍</a>
    </div>
    @else
    <p class="text-danger fw-bold">EVENT FULL</p>
    <div class="d-flex justify-content-around">
      <form action="{{route('enroll', $event->id)}}" method="POST">
        @csrf 
        <button type="submit" class="btn btn-outline-success" hidden>Enroll in Course</button>
      </form>
      <a type="submit" class="btn btn-outline-light" href="{{route('show', ['id'=>$event->id])}}" hidden>🔍</a>
    </div>
    @endif
  
  </div>
</div>


