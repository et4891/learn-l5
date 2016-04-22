@extends('app')
@section('content')

    <h1>Articles</h1>
    <hr>

    @if(count($articles))
        @foreach($articles as $article)
            <article>
                <a href="/articles/{{$article->id}}">{{$article->title}}</a>
                <div class="class">{{$article->body}}</div>
            </article>
        @endforeach
    @else
        <p>NO ARTICLES</p>
    @endif


@stop