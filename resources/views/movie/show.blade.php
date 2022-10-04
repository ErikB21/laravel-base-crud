@extends('layout.app')

@section('title', 'Dettaglio Fumetto')
@section('css')
    <link rel="stylesheet" href="{{asset('css/show.css')}}">
@endsection


@section('content')
    <h1 class="text-center py-3">{{$movie->title}}</h1>
    <div class="container  d-flex justify-content-center">
        <div class="my_details_thumb px-2">
            <img src="{{$movie->thumb}}" class="border-0" alt="{{$movie->title}}">
        </div>
        <div class="my_details_text px-2">
            <p class="text-light">{{$movie->description}}</p>
            <ul class="list-unstyled">
                <li class="text-light">{{$movie->price}}£</li>
                <li class="text-light">{{$movie->series}}</li>
                <li class="text-light">{{$movie->sale_date}}</li>
                <li class="text-light">{{$movie->type}}</li>
            </ul>
        </div>
        <div class="d-flex align-items-center flex-column justify-content-center ps-3">
            <a class="btn btn-warning my-2" href="{{route('movies.edit', ['movie' => $movie])}}">Modifica</a>
            <form action="{{route('movies.destroy', ['movie' => $movie])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger my-2">Elimina</button>
            </form>
        </div>
            
    </div>
@endsection