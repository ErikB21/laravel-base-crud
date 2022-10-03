@extends('layout.app')

@section('title', 'Crea un nuovo Fumetto')


@section('content')

    <div class="container">
        <form action="{{route('movies.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="thumb" class="form-label">Images</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
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
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            

            
            <button type="submit" class="btn btn-primary">Salva Fumetto</button>
        </form>
    </div>


@endsection