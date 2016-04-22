@extends('app')
@section('content')
    <h1><a href="/kiosks/">{{ $kiosk['name'] }}</a></h1>
    <hr>
    @foreach($kiosk as $name => $value)
        <h2>{{ $name }}: {{ $value }}</h2>
    @endforeach
@stop