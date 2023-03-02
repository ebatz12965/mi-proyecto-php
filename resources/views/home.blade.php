@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <p>Estoy tomando el texto de layout.</p>
@endsection

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">¡Bienvenido a mi sitio web!</h1>
            <p>Visita estas paginas más: </p>
            <ul>
                <li><a href="/pagina1">Página 1</a></li>
                <li><a href="/pagina2">Página 2</a></li>
                <li><a href="/pagina3">Página 3</a></li>
            </ul>
        </div>
    </div>
@endsection

@section('content')



@endsection
