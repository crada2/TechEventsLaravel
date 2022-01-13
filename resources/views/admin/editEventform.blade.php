@extends('layouts.app')

@section('content')
<x-header />
  <main>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row" id="list">
              <form action="{{ route('update',$event->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                  <label for="inputTitle">TITLE</label>
                  <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$event->title}}">
                </div>
                <div class="form-group mt-2">
                    <label for="formFile" class="form-label">SELECT IMAGE</label>
                    <input type="file" name="img" class="form-control"  id="formFile" value="{{asset('/storage/image/event/'.$event->img)}}">
                </div>
                <div class="form-group mt-2">
                  <label for="exampleInputText1">DESCRIPTION</label>
                  <input name="text" type="text" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" value="{{$event->text}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputText1">DATE</label>
                  <input name="date_time" type="datetime-local" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" value="{{$event->date_time}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputText1">PLACES</label>
                  <input name="users_max" type="number" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" value="{{$event->users_max}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
            </div>
        </div>
    </div>
  </main>
  <x-footer />
@endsection