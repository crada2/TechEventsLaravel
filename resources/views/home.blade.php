@extends('layouts.app')
@auth
<x-header />
   
{{--         <section class="alert alert-secondary d-flex justify-content-around"> 
            <a class="btn btn-outline-secondary" href="{{ route('landing') }}">Back</a>
       </section> --}}
  
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
                    <h3 class="text-decoration d-flex justify-content-around">✰ {{ __('My courses') }} </h3>
                    

                    <!--imprimo cards del mismo usuario-->
                  

                    <br>    
                        <div class="container">  
                             <!-- foreach para recorrer eventos con ee id e imprimirlos -->
                            <div class="card-header d-flex justify-content-around"  >
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-around">
                                     <!--foreach-->
                                    @foreach ($events as $event)
                                        <x-event_usercard :event='$event' />

                                    <!--like /dislike-->
                                    @endforeach
                                     
                                    <br>
                                </div>
                            </div>
                            <br>
                                <h3 class="text-decoration d-flex justify-content-around">✰ {{ __('My certificates') }} </h3>
                            <br>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@endauth