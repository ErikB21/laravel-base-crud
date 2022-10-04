@extends('layout.app')

@section('title', 'Modifica un Fumetto')
@section('css')
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
@endsection


@section('content')

    <div class="my_container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <form action="{{route('movies.update', ['movie' => $movie->id])}}" class="d-flex flex-column align-items-start justify-content-center" method="POST">
    
            @csrf
            
            @method('PUT')

            <div class="mb-3">
                <label for="thumb" class="form-label">Images</label>
                <input type="text" class="form-control" id="thumb" value="{{$movie->thumb}}" name="thumb">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" value="{{$movie->title}}" name="title">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" value="{{$movie->price}}" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" value="{{$movie->series}}" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" id="sale_date" value="{{$movie->sale_date}}" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>

                <select name="type" id="type" class="form-select">
                    <option value="comic-book">Comic Book</option>
                    <option value="graphic-novel">Graphic Novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description">{{$movie->description}}</textarea>
            </div>
            

            
            <button type="submit" class="btn">Applica</button>
        </form>
    </div>


@endsection