@extends('layout.base')

@section('content')

@foreach ($trains as $train)
    <p>{{ $train->company }}</p>
@endforeach

@endsection