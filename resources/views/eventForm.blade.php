@extends('layouts.app')

@section('content')

  <x-header />

  <main>
    <div class="container">
      <div class="album py-5 bg-light">
        <div class="container">
            <div class="row" id="list">
              <form action='{{ route('events.store')}}' method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">TITLE</label>
                  <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">IMAGE URL</label>
                  <input name="img" type="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputText1">DESCRIPTION</label>
                  <input name="text" type="text" class="form-control" id="exampleInputText1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputText1">DATE</label>
                  <input name="date_time" type="date_time" class="form-control" id="exampleInputText1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submint</button>
              </form>
            </div>
        </div>
      </div>
    </div>
  </main>

  <x-footer />
@endsection

