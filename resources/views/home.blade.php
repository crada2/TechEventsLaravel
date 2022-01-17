@extends('layouts.app')
<x-header />
@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-header d-flex justify-content-around">
                    <h2>💻   &nbsp &nbsp <b> {{ __('The desk of') }} {{ Auth::user()->name }}</b></h2> 
                    </div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3 class="text-decoration-underline d-flex justify-content-around">✰ {{ __('My courses') }} </h3>
                    ( user_id: {{ Auth::user()->id }} )
                    <br>    
                        <div class="container">  
                             <!-- foreach para recorrer eventos con ee id e imprimirlos -->
                            <div class="card-header d-flex justify-content-around"  >
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-around">
                                     <!--foreach-->
                                    @foreach ($events as $event)
                                        <x-event_usercard :event='$event' />
                                    @endforeach
                                     <!--foreachend-->
                                    <br>
                                </div>
                            </div>
                            <br>
                                <h3 class="text-decoration-underline d-flex justify-content-around">✰ {{ __('My certificates') }} </h3>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
