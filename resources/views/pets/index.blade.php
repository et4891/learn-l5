@extends('app')
@section('content')
    <h1>Pets!</h1>
    <hr>
    <h3><a href="/pets/create/" class="btn btn-success">Add Incoming</a></h3>
    <hr>
    @foreach($pets as $pet)
        <h4>{{ $pet->name }} -- {{ $pet->id }}</h4>
        <a href="/pets/{{$pet->id}}" class="btn btn-info">Details</a>
        <hr>
    @endforeach
@stop