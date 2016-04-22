@extends('app')
@section('content')
    <h1>{{ $title }}</h1>
    <hr>
    <h4><a href="/kiosks/create">Create New One</a></h4>
    <hr>
    @foreach($kiosks as $key=>$kiosk)
        <h2>K-Name: {{ $kiosk->name }}</h2>
        <h4>Version: {{ $kiosk->version }}</h4>
        <a href="/kiosks/{{$kiosk->id}}">Show Details</a>
    @endforeach
@stop