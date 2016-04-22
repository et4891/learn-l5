@extends('app')
@section('content')

    <h1>Create new Kiosk</h1>
    <hr>

    {!! Form::open(['url' => '/kiosks']) !!}
        <div class="form-group">
            {!! Form::label('Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('City:') !!}
            {!! Form::text('city', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Country:') !!}
            {!! Form::text('country', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Version:') !!}
            {!! Form::text('version', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('+++ Add +++', ['class' => 'btn btn-success form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop