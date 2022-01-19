<div class="card  border-light" style="width: 18rem;">
  <img src="{{asset('/storage/image/event/'.$event->img)}}"  class="border border-5 rounded-3" alt="...">
  <div class="card-body">
    <h2><b class="card-text d-flex justify-content-center ">{{$event->title}}</b> </h2>
   <br>

   @auth  
    <span  class="d-flex justify-content-around bg-light rounded-3 ">
      <div class="d-flex"><button class="p-2 btn btn-success opacity-75 rounded-circle">👍🏻 </button>
        <p>0</p></div>
      
     
        <div class="d-flex"><button class="p-2 btn btn-danger opacity-75 rounded-circle">👎🏻 </button>
          <p>0 &nbsp</p></div>
    </span>
    @endauth

    @if(!(Auth::user()))
    <p class="card-text  p-3 mb-2 bg-light text-dark d-flex justify-content-center"><i> ⭐ ⭐ ⭐ ⭐  {{ $event->name }}</i> </p>
    @endif 
        
    




<br><br>
    <p class="card-text ">{{$event->text}}</p>
    <p class="card-date "><i>{{$event->date_time}}</i> </p>
    <b>Maximum users allowed: {{$event->vacancy()}}</b>
    <hr />
    @if ($event->isFull())
      <p class="text-danger fw-bold d-flex justify-content-center">EVENT FULL</p>
    @else
      <div class="d-flex justify-content-around">
        <form action="{{route('enroll', $event->id)}}" method="POST">
          @csrf 
          <button type="submit" class="btn btn-outline-success">Enroll in Course</button>
        </form>
        <a type="submit" class="btn btn-outline-light" href="{{route('show', ['id'=>$event->id])}}">🔍</a>
      </div>
    @endif
  </div>
</div>


