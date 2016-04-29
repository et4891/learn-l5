@extends('app')
@section('content')
    <h1>Create new Post</h1>
    <hr>
    {!! Form::open(['url' => 'posts']) !!}
    @include('posts.partial.form', ['submitButtonText' => 'Add Post'])
    {!! Form::close() !!}

    @include('errors.createEditForm')
@stop