@extends('layout.app')

@section('title', 'Modifica un Fumetto')
@section('css')
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
@endsection


@section('content')

    <div class="my_container">
        <form action="{{route('movies.update', ['movie' => $movie->id])}}" class="d-flex flex-column align-items-start justify-content-center" method="POST">
    <!--il form girerà la richiesta al metodo update, insieme all'id del prodotto in dettaglio
        con metodo POST(ma in realtà con metodo PUT, solo che il form non supporta questo metodo)-->
            @csrf
            <!--quindi Laravel ci mette a disposizione un @method() che cambia
                completamente il metodo del form e finalmente grazie alla logica
                del metodo update siamo in grado di modificare un fumetto. Oltremodo
                aggiungendo la value e passando quello che è il nostro id della colonna, le modifiche
                saranno già presenti nelle varie input senza che dobbiamo riscrivere tutto da capo-->
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