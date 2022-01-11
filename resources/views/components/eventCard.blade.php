@foreach ($events as $event)
  @if ($event->date_time > now())
    <div class="card  border-light" style="width: 18rem;">
      <img src="{{asset('/storage/image/event/'.$event->img)}}"  class="border border-5 rounded-3" alt="...">
        <div class="card-body">
          <h2><b class="card-text d-flex justify-content-center ">{{$event->title}}</b> </h2>
          <p class="card-text  p-3 mb-2 bg-light text-dark d-flex justify-content-center "><i> ⭐ ⭐ ⭐ ⭐  {{ $event->name }}</i> </p>
          <p class="card-text ">{{$event->text}}</p>
          <p class="card-date"><i>{{$event->date_time}}</i> </p>
            <div class="d-flex justify-content-around">
              @if($event->totalusers != $event->users_max)
              <a type="submit" class="btn btn-outline-success"  href="{{ route('home', $event->id) }}">Enroll in Course</a>
              @endif
              <a type="submit" class="btn btn-outline-info"  href="{{route('show',  ['id'=>$event->id]) }}">View</a>
            </div>
        </div>
    </div>
  @endif 
@endforeach 
