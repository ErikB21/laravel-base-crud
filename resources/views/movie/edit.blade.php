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
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" value="{{old('thumb', $movie->thumb)}}" name="thumb">
                @error('thumb')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title', $movie->title)}}" name="title">
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{old('price', $movie->price)}}" name="price">
                @error('price')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" value="{{old('series', $movie->series)}}" name="series">
                @error('series')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" value="{{old('sale_date', $movie->sale_date)}}" name="sale_date">
                @error('sale_date')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>

                <select name="type" id="type" class="form-select @error('type') is-invalid @enderror">
                    <option value="comic-book">Comic Book</option>
                    <option value="graphic-novel">Graphic Novel</option>
                </select>
                @error('thumb')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description', $movie->description)}}</textarea>
            </div>
            <button type="submit" class="btn">Applica</button>
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </form>
    </div>


@endsection