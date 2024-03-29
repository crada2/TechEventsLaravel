@extends('layouts.app')

@section('content')

<x-header />
<section class="alert alert-secondary d-flex justify-content-around">
  <a class="btn btn-outline-secondary" href="{{ route('landing') }}">Back</a>
</section>
<main>
  <div class="container">
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row" id="list">
          <form action='{{ route('events.store')}}' method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">TITLE</label>
              <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group mt-2">
              <label for="formFile" class="form-label">SELECT IMAGE</label>
              <input type="file" name="img" class="form-control" id="formFile">
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputText1">DESCRIPTION</label>
              <input name="text" type="text" class="form-control" id="exampleInputText1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputText1">DATE</label>
              <input name="date_time" type="datetime-local" class="form-control" id="exampleInputText1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputText1">PLACES</label>
              <input name="users_max" type="number" class="form-control" id="exampleInputText1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<x-footer />
@endsection