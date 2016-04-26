@extends('app')
@section('content')
    <h1>Update: {{$post['name']}}</h1>
    <a href="/posts/{{$post['id']}}">Back</a>
    <hr>
    <form action="/posts" method="post">
        {{ csrf_field() }}
        @foreach($post as $prop => $value)
            <div class='group-control'>
                @if($prop == 'id')
                    <input type='text' style="display: none;" value='{{$value}}' name='{{$prop}}' class='form-control'>
                @elseif($prop == 'body')
                    <label for="body">Content:</label>
                    <textarea name="{{$prop}}" id="{{$prop}}" cols="30" rows="10" class="form-control">{{$value}}</textarea>
                @else
                    <label for='{{$prop}}'>{{$prop}}</label>
                    <input type='text' value='{{$value}}' name='{{$prop}}' class='form-control'>
                @endif
            </div>
        @endforeach
            <input type="submit" value="Update!" class="btn btn-success">
    </form>
@stop