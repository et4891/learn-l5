@extends('app')
@section('content')
    <h2>Title: {{$post->title}}</h2>
    <hr>
    <h3>{{$post->body}}</h3>
    <h6>Date Posted: {{$post->posted_on}}</h6>
    <a href="/posts/" class="btn btn-info">Back</a>
@stop