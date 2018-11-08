@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Laratter</h1>
        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/acerca">Acerca de nosotros</a></li>
            </ul>
        </nav>
    </div>
    <div class="row">
        @foreach($messages as $message)
            <div class="col-6">
                <img class="img-thumbnail" src="{{ $message['image']}}" alt="">
                <p class="card-text">{{ $message['content']}}</p>
                <a href="/messages/{{ $message['id']}}">Leer más</a>
            </div>
        @endforeach
    </div>
@endsection