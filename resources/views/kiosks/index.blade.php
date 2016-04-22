@extends('app')
@section('content')
    <h1>{{ $title }}</h1>
    <hr>
    @foreach($kiosks as $key=>$kiosk)
        <h2>{{ $kiosk->name }}</h2>
        <h3>{{ $kiosk->country }}</h3>
        <a href="/kiosks/{{$kiosk->id}}">Show Details</a>
    @endforeach
@stop