@extends('layouts.app')

@section('content')
    <h1>{{$posts->title}}</h1>
    <div>
        {!!$posts->body!!}
    </div>
    <hr/>
    <small>Written on {{$posts->created_at}}</small>
@endsection