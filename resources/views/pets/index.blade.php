@extends('app')
@section('content')
    <h1>Pets!</h1>
    <hr>
    @foreach($pets as $pet)
        <h4>{{ $pet->name }} -- {{ $pet->id }}</h4>
        <a href="/pets/{{$pet->id}}">Details</a>
        <hr>
    @endforeach
@stop