@extends('app')
@section('content')
    <h1>{{ $pet['name'] }}</h1>
    @foreach($pet as $column => $value)
        <p>{{$column}}: {{$value}}</p>
    @endforeach
    {!! Form::open() !!}
    <div class="group-control">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                <a href="/pets/" class="btn btn-info form-control">Back</a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                {!! Form::submit('Delete', ['class' => 'btn btn-danger form-control col-md-6']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop