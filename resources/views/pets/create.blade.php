@extends('app')
@section('content')
    <h1>New Pet Incoming~</h1>
    <hr>
    {!! Form::open(['url' => '/pets']) !!}

    <div class="form-group">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('owner', 'Owner:') !!}
        {!! Form::text('owner', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('notes', 'Notes:') !!}
        {!! Form::text('notes', null, ['class' => 'form-control', 'placeholder' => 'Enter any notes for this pet']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Status: (Alive/Dead)') !!}
        {!! Form::text('status', 'Alive', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('adopted', 'Adopted: (True=1/False=0)') !!}
        {!! Form::text('adopted', true, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Let\'s Welcome The New Ones!', ['class' => 'btn btn-warning form-control']) !!}
    </div>


    {!! Form::close() !!}
@stop