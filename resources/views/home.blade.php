@extends('layouts.main')
@section('doc-title','Movies')
@section('main-content')
<div class="container">
    {{-- <div class="row">
        <div class="col-4">
            @foreach($movies as $movie)
            <div class="card">
                <img src="{{$movie['cover']}}" alt="{{$movie['title']}}" class="image-fluid">
                <h2>{{$movie['title']}}</h2>
                <p>{{$movie['original_title']}}</p>
                <span>{{$movie['vote']}}</span>
                <span>Relase Date : {{$movie['date']}}</span>
            </div>
            @endforeach
        </div>
    </div> --}}
    <div id="movie-cards" class="row" >
      @foreach($movies as $movie)
      <div class="my-col">
        <div class="card" >
          <img class="card-img-top movie-cover" src="{{$movie['cover']}}" alt="{{$movie['title']}}">
          <div class="card-body">
            <h5 class="card-title">{{$movie['title']}}</h5>
            <p class="card-text">{{$movie['trama']}}</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">original title: {{$movie['original_title']}}</li>
            <li class="list-group-item">Vote:{{$movie['vote']}}</li>
            <li class="list-group-item">Relase Date : {{$movie['date']}}</li>
          </ul>
          <div class="card-body">
            <a href="{{$movie['cover']}}" class="card-link">More info...</a>
          </div>
        </div>
      </div>
        @endforeach
    </div>
</div>

@endsection