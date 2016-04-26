@extends('app')
@section('content')
    <h1>{{$post['name']}}</h1>
    <hr>
    @foreach($post as $prop => $value)
        <h3>{{$prop}}: {{$value}}</h3>
    @endforeach
    <a href="/posts/">Back</a>
    <form action="/posts/{{$post['id']}}" method="post">
        {{ csrf_field() }}
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    <a href="/posts/update/{{$post['id']}}">Update</a>
@stop