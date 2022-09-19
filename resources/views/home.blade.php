@extends('layouts.main')
@section('doc-title','Movies')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @foreach($movies as $movie)
            <div class="card">
                <h2>{{$movie['title']}}</h2>
                <p>{{$movie['original_title']}}</p>
                <span>{{$movie['vote']}}</span>
                <span>Relase Date : {{$movie['date']}}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection