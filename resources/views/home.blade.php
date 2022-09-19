@extends('layouts.main')
@section('doc-title','Movies')
@section('main-content')
<div class="container">
    {{-- <div class="row">
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
    </div> --}}
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Original Title</th>
            <th scope="col">Nationality</th>
            <th scope="col">Relase date</th>
            <th scope="col">Rating</th>
          </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
          <tr>
            <th scope="row">{{$movie['id']}}</th>
            <td>{{$movie['title']}}</td>
            <td>{{$movie['original_title']}}</td>
            <td>{{$movie['nationality']}}</td>
            <td>{{$movie['date']}}</td>
            <td>{{$movie['vote']}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection