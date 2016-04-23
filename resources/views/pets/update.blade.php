@extends('app')
@section('content')
    <h1>Update {{$pet->name}} ----- owned by {{$pet->owner}}</h1>
    <hr>
    {!! Form::open(['url' => '/pets']) !!}
    <input name="id" type="text" value="{{$pet->id}}" style="display: none;">
    <div class="form-group">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type', $pet->type, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', $pet->name, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('owner', 'Owner:') !!}
        {!! Form::text('owner', $pet->owner, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('notes', 'Notes:') !!}
        {!! Form::text('notes', $pet->notes, ['class' => 'form-control', 'placeholder' => 'Enter any notes for this pet']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Status: (Alive/Dead)') !!}
        {!! Form::text('status', $pet->status, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('adopted', 'Adopted: (True=1/False=0)') !!}
        {!! Form::text('adopted', $pet->adopted, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-6 col-lg-6">
        {!! Form::submit('Update-----> ' . $pet->name, ['class' => 'btn btn-warning form-control']) !!}
    </div>

    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
        <a href="/pets/" class="btn btn-info">Back</a>
    </div>


    {!! Form::close() !!}
@stop