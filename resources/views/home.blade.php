@extends('layout.base')

@section('content')

@foreach ($trains as $train)
    <p>{{ $train->company }}</p>
    <p>{{ $train->departur_station }}</p>
    <p>{{ $train->arival_station }}</p>
    <p>{{ $train->departures_time }}</p>
    <p>{{ $train->arrivals_time }}</p>
    <p>{{ $train->departures_date }}</p>
    <p>{{ $train->arrivals_date }}</p>
    <p>{{ $train->code_train }}</p>
    <p>{{ $train->number_carriages }}</p>
    <p>
        @if ($train->on_time == true)
            Treno in orario
        @else
            Treno in ritardo
        @endif  
    </p>
    <p>
        @if ($train->cancel == true)
            Cancellato
        @endif  
    </p>
@endforeach

@endsection