@extends('layout.app')

@section('title', 'Lista Fumetti')

@section('content')

    <div class="container p-3">
        <a href="{{route('movies.create')}}" class="btn btn-primary">Crea il tuo Fumetto!</a>
    </div>
    <div class="container d-flex align-items-center justify-content-between flex-wrap">
        @forelse ($movies as $movie)
            <div class="card" style="width: 22rem;">
                <img src="{{$movie->thumb}}" class="card-img-top" alt="{{$movie->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <a href="{{route('movies.show', ['movie' => $movie->id])}}" class="btn btn-primary">Dettaglio fumetto</a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$movie->price}}£</li>
                    <li class="list-group-item">{{$movie->series}}</li>
                    <li class="list-group-item">{{$movie->sale_date}}</li>
                    <li class="list-group-item">{{$movie->type}}</li>
                </ul>
            </div>
        @empty
            <h1>Nessun Fumetto trovato!</h1>
        @endforelse
    </div>

@endsection