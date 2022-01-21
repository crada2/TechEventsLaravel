<style>
  .card-text:last-child {
    font-size: 1.1rem;
    text-align: center;
  }
</style>

<div class="card  border-light rounded-pill" style="width: 18rem">
  <img src="{{asset('/storage/image/event/'.$event->img)}}" class="border border-5 rounded-pill" alt="...">
  <div class="card-body">
    <h2><b class="card-text d-flex justify-content-center ">{{$event->title}}</b> </h2>
    <br>
  </div>
</div>