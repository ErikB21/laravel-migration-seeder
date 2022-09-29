@extends('layout.app')

@section('title', 'Lista Treni')

@section('content')

    <div class="container4">
        @forelse($trains as $train)
        <div class="card">
            <h2>Treno: {{$train->company_name}}</h2>
            <span>Da: {{$train->departure_station}}</span>
            <span>A: {{$train->arrival_station}}</span>
            <span>Orario Partenza: {{$train->departure_time}}</span>
            <span>Orario Arrivo: {{$train->arrival_time}}</span>
            <span>N.treno: {{$train->train_code}}</span>
            <span>Carrozza: {{$train->carriage_number}}</span>
            @if ($train->in_time == 1) 
                <span>In orario!</span>
            @elseif ($train->in_time == 0 && $train->cancel_train)
                <span>Cancellato! Ci scusiamo per il disagio</span>
            @else 
                <span>In ritardo!</span>
            @endif
        </div>
        @empty
            <span>Nessun treno trovato!</span>
        @endforelse
    </div>

    

@endsection