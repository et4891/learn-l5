@extends('app')
@section('content')
    <hr>
    <a href="/posts/create" class="btn btn-success">Create New Post</a>
    <hr>
    @if(count($posts))
        <h2>All Posts</h2>
        <hr>
        @foreach($posts as $post)
            <h3>{{$post['title']}}</h3>
            <a href="/posts/{{$post['id']}}" class="btn btn-info">show</a>
        @endforeach
    @else
        <h1>NO POSTS, PLEASE CREATE SOME</h1>
    @endif
@stop