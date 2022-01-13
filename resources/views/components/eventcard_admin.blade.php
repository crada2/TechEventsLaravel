<div class="card  border-light" style="width: 18rem;">
    <img src="{{asset('/storage/image/event/'.$event->img)}}"  class="border border-5 rounded-3" alt="...">
    <div class="card-body">
      <h2><b class="card-text d-flex justify-content-center ">{{$event->title}}</b> </h2>
      <p class="card-text  p-3 mb-2 bg-light text-dark d-flex justify-content-center "><i> ⭐ ⭐ ⭐ ⭐  {{ $event->name }}</i> </p>
      <p class="card-text ">{{$event->text}}</p>
      <p class="card-date"><i>{{$event->date_time}}</i> </p>
      <b>Maximum users allowed: {{$event->users_max}}</b>
        <hr />
        <div class="d-flex justify-content-around">
            <form action="{{route('edit',$event->id)}}" method="GET">
                @csrf 
                <button type="submit" class="btn btn-outline-danger">Edit</button>
            </form>
            <form  action="/events/{{ $event->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Delete</button> 
            </form>
        </div>
    </div>
</div>


