@extends('app')
@section('content')
    <h1>{{  $article->title }}</h1>

    <article>
        <a href="/articles/"> Back </a>
        <div class="class">{{$article->body}}</div>
    </article>
@stop