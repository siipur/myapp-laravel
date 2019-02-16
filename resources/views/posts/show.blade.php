@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr/>
    <small>Written on {{$post->created_at}}</small>
    <hr/>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
@endsection