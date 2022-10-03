@extends('layout.app')

@section('title', 'Dettaglio Fumetto')


@section('content')

    <div class="container align-items-center d-flex flex-column justify-content-center">
        <h1>Dettagli Fumetto {{$movie->title}}</h1>

        <img src="{{$movie->thumb}}" class="img-thumbnail" alt="{{$movie->title}}">
        <p>{{$movie->description}}</p>
        <ul>
            <li>{{$movie->price}}</li>
            <li>{{$movie->series}}</li>
            <li>{{$movie->sale_date}}</li>
            <li>{{$movie->type}}</li>
        </ul>


    </div>

    @endsection