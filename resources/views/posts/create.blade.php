@extends('app')
@section('content')

    <h1>Create new post</h1>
    <hr>
    {!! Form::open(['url' => '/posts/']) !!}

    <div class="group-control">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="group-control">
        <label for="body">Content:</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <input type="submit" value="Add new Post" class="form-control btn btn-success">

    {!! Form::close() !!}

@stop