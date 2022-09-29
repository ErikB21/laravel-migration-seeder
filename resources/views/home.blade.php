@extends('layout.app')

@section('title', 'Home Page')

@section('content')
    <div class="container2">
        <h1>Booltrain</h1>
        <p>Viaggia, esplora, vivi! Prova le tue esperienze viaggiando con noi!</p>
        <p>“Povero me! Povero me! Arriverò in ritardo!”</p>
        <button>
            <a href="{{route('train')}}">Treni</a>
        </button>
    </div>
@endsection