@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Kembali</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="img">
    <br/><br/>
    <div>
        {!!$post->body!!}
    </div>
    <hr/>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr/>
    <!-- Jika Sudah Login Tampilkan Menu dibawah-->
    @if(!Auth::guest())
        <!-- jika Artikel miliknya tampilkan -->
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endif

@endsection