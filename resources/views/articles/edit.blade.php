@extends('app')
@section('content')
    <h1>Edit: {{$article->title}}</h1>
    <hr>
    {!! Form::model($article,['url' => 'articles/' . $article->id, 'method' => 'patch']) !!}
    @include('articles.form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}

    @include('errors.list')
@stope