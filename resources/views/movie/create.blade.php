@extends('layout.app')

@section('title', 'Crea un nuovo Fumetto')
@section('css')
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
@endsection


@section('content')

    <div class="my_container">
        <form action="{{route('movies.store')}}" class="d-flex flex-column align-items-start justify-content-center" method="POST">
        <!--Il form avrà una rotta che punterà a store, e metodo POST
            che mi permette di inviare tutti i dati nel form al metodo di laravel
            che salverà i dati nel DB. Nelle input, name e value dovranno coincidere 
            con gli id della colonna che richiameremo. Questi dati naturlamente 
            saranno inviati al metodo movies.store-->

            <!--aggiungiamo @csrf per prevenire abusi nel nostro servizio di form-->
            @csrf

            <div class="mb-3">
                <label for="thumb" class="form-label">Images</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb')}}">
                @error('thumb')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
                @error('price')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}">
                @error('series')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
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
                @error('type')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
            </div>
            <button type="submit" class="btn">Salva Fumetto</button>
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </form>
    </div>


@endsection