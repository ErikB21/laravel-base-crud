<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">
      <img src="{{asset('images/dc-logo.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Comics
    </a>
    <a href="{{route('movies.index')}}">Fumetti</a>
  </div>
</nav>

@section('css')
    <style>
        nav{
            height: 80px;
        }
    </style>
@endsection