<div class="card border-light" style="width: 18rem;">
  <img src="{{asset('/storage/image/event/'.$event->img)}}"  class="border border-5 rounded-3" alt="Card image cap">
  <div class="card-body">
    <h2><b class="card-text d-flex justify-content-center ">{{$event->title}}</b> </h2>

 
      
   @auth  
   <span  class="d-flex justify-content-center   rounded-3 ">
    <div  class="   rounded-pill ">
     <a href="{{route('like', $event->id) }}"  class="card-text  p-3 mb-2 bg-light text-dark d-flex justify-content-center btn btn-outline-warning rounded-circle">⭐ {{$event->likesCount()}}  </a>
    </div>
   </span>
 @endauth


    <p class="card-text ">{{$event->text}}</p>
    <p class="card-date"><i>{{$event->date_time}}</i> </p>
      <div class="d-flex justify-content-around">
        <form action="{{route('unsubscribe', $event->id)}}" method="POST">
          @csrf 
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger">Unsubscribe</button>
        </form>
        <a type="submit" class="btn btn-outline-light"  href="{{route('show',  ['id'=>$event->id]) }}">🔍</a>
        <!-- falta un boton -->
      </div>
    </div>
</div>
