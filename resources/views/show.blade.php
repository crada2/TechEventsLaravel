@extends('layouts.app')

@section('content')
<x-header />
<br><br>
<div class="p-3  d-flex flex-column justify-content-center">
    <div class="d-flex rounded-pill justify-content-center">
        <img class='position-absolute d-flex rounded-pill opacity-25' src="{{asset('/storage/image/event/'.$event->img)}}" style="width: 70rem;" alt="Card image cap">
    </div>
    <div class="d-flex justify-content-center">
        <div class="rounded-3 card border-light" style="width: 30rem;">
            <div class="position-relative d-flex  flex-column justify-content-center card-body">
                <h2><b class="card-text d-flex justify-content-center">{{$event->title}}</b> </h2>
                @auth
                <span class="d-flex justify-content-center   rounded-3 ">
                    <div class="   rounded-pill ">
                        <a href="{{route('like', $event->id) }}" class="card-text  p-3 mb-2 bg-light text-dark d-flex justify-content-center btn btn-outline-warning rounded-circle">⭐ {{$event->likesCount()}} </a>
                    </div>
                </span>
                @endauth
                <p class="card-text d-flex justify-content-center ">{{$event->text}}</p>
                <p class="card-date d-flex justify-content-center"><i>{{$event->date_time}}</i> </p>
                <b class="d-flex justify-content-center ">Maximum users allowed: {{$event->users_max}}</b>
                <hr>
                <p class='card-text  p-3 mb-1 bg-light  d-flex justify-content-center '> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora consectetur voluptate laudantium iste sapiente libero, et autem
                    vero eligendi quam cum doloribus vel temporibus tempore aliquam repellendus. Aspernatur, itaque nostrum?
                    Lorem ipsum dolor sit amet consecteturr ab est, quo tempora saepe modi hic quas quam nesciunt accusamus facilis incidunt. Modi commodi inventore eos sapiente. Enim?
                </p>
                <hr>
                <br><br>
                <div class="d-flex  justify-content-center rounded-3  p-2 mb-2 ">
                    <form action="{{route('enroll', $event->id)}}" method="POST">
                        @csrf
                        <button type="submit" class=" btn btn-outline-success">Enroll in Course</button>
                    </form>
                </div>
                <div class=" d-flex justify-content-center "><a class="rounded-pill btn btn-outline-light  p-3 mb-3 bg-light" style="width: 7rem;" href="{{ route('landing') }}">↩️</a></div>
            </div>
        </div>
    </div>
</div>
@endsection