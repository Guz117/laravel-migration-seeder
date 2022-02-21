@extends('layout.base')

@section('content')
<div class="trains">
    <div class="index">
        <h5>COMPAGNIA</h5>
        <h5>STAZIONE DI PARTENZA</h5>
        <h5>STAZIONE DI ARRIVO</h5>
        <h5 class="orario_partenza">ORARIO DI PARTENZA </h5>
        <h5 class="orario_arrivo">ORARIO DI ARRIVO</h5>
        <h5>DATA DI PARTENZA</h5>
        <h5>DATA DI ARRIVO</h5>
        <h5 class="codice_treno">CODICE TRENO</h5>
        <h5 class="numero_carrozze">NUMERO CARROZZE</h5>
        <h5>IN ORARIO</h5>
        <h5 class="ix">TRENO SOPPRESSO</h5>
    </div>
    @foreach ($trains as $train)
        <div class="train">
            <p>{{ $train->company }}</p>
            <p>{{ $train->departur_station }}</p>
            <p>{{ $train->arival_station }}</p>
            <p class="departures_time">{{ $train->departures_time }}</p>
            <p class="arrivals_time">{{ $train->arrivals_time }}</p>
            <p>{{ date_format(date_create($train->departures_date),'d M Y') }}</p>
            <p>{{ date_format(date_create($train->arrivals_date),'d M Y') }}</p>
            <a href="{{ route('show', $train) }}"><p class="code_train">{{ $train->code_train }}</p></a>
            <p class="number_carriages">{{ $train->number_carriages }}</p>
            <p>
                @if ($train->on_time == true)
                    Treno in orario
                @else
                    Treno in ritardo
                @endif  
            </p>
            <p class="x">
                @if ($train->cancel == true)
                    <i class="fa-solid fa-x"></i>
                @endif  
            </p>
        </div>
        @endforeach
        <div class="number">
            {{ $trains->links() }}
        </div>
</div>

@endsection