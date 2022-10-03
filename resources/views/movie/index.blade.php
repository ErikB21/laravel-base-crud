@extends('layout.app')

@section('title', 'Lista Fumetti')
@section('css')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')

    <div class="container p-3">
        <h1 class="text-light">Lista Fumetti</h1>
        <p class="text-light">Crea il tuo fumetto! Sarai pronto a scalare la vetta?</p>
        <a href="{{route('movies.create')}}" class="btn btn-primary">Crea</a>
    </div>
    <div class="container d-flex align-items-center justify-content-between flex-wrap">
        @forelse ($movies as $movie)
            <div class="my_card">
                <div class="my_thumb">
                    <img src="{{$movie->thumb}}" class="" alt="{{$movie->title}}">
                </div>
                <div class="my_text">
                    <h5 class="">{{$movie->title}}</h5>
                    <a href="{{route('movies.show', ['movie' => $movie->id])}}" class="btn btn-primary">Dettaglio fumetto</a>
                </div>
            </div>
        @empty
            <h1>Nessun Fumetto trovato!</h1>
        @endforelse
    </div>

@endsection