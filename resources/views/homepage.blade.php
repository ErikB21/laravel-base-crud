@extends('layout.app')

@section('title', 'Home Page')
@section('css')
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
@endsection


@section('content')
    <div class="my_home container d-flex align-items-start justify-content-center">
        <h1>Benvenuto nel mondo Comics!</h1>
    </div>
@endsection