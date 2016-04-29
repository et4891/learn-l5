@extends('app')
@section('content')
    <h1>Edit: {{$post->title}}</h1>
    <hr>
    {!! Form::model($post, ['url' => 'posts/'.$post->id, 'method' => 'patch']) !!}
    @include('posts.partial.form', ['submitButtonText' => 'Update Post'])
    {!! Form::close() !!}

    @include('errors.createEditForm')
@stop