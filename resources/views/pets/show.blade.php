@extends('app')
@section('content')
    <h1>{{ $pet['name'] }}</h1>
    @foreach($pet as $column => $value)
        <p>{{$column}}: {{$value}}</p>
    @endforeach
    <a href="/pets/">Back</a>
@stop