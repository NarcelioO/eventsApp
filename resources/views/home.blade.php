@extends('layouts.main')
@section('title', 'HDC events')
@section('content')
<div id="search-container" class="container text-center ">
        <div class="col-sm-12"> 
                <h2>Busque um evento</h2>
                <form action="">
                        <input type="text" name="search" id="search" class="form-control " placeholder="Search..."> 
                </form>
        </div>
</div>
<div id="events-container" class="col-md-12">
        <h2>Proximos eventos</h2>
        <p>Veja os proximos eventos</p>
        <div id="cards-container" class="row">
                @foreach($events as $event)
                        <div class="card col-md-3">
                                <img src="img/events/{{$event->image}}" alt="{{$event->title}}">
                                <div class="card-body">
                                        <p class="card-date">
                                                10/09/2024
                                        </p>
                                        <h5 class="card-title">
                                                {{$event->title}}
                                        </h5>
                                        <p class="card-participants">X participantes</p>
                                        <a href="/event/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                                </div>
                        </div>
                @endforeach
        </div>
</div>
@endsection