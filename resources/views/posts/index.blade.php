@extends('app')
@section('content')

    <h1>Posts</h1>
    <h4><a href="/posts/create/">Create New</a></h4>
    <hr>
    @foreach($posts as $post)
        <h3>{{$post['name']}}</h3>
        <a href="/posts/{{$post['id']}}">Details</a>
    @endforeach

@stop