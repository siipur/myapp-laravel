@extends('layouts.app')

@section('content')
    <h1>CREATE POST</h1>
    <!-- 
        {!! Form::open(['url' => 'foo/bar']) !!} 
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) !!}
    -->

    {!! Form::open(['action' => ['PostsController@update', $post->id ], 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }} : 
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Isi Judul Disini' ]) }}
        </div>
        <div class="form-group">
                {{ Form::label('body', 'Body') }} : 
                {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Isi Body Disini' ]) }}
        </div>
        {{ Form::hidden('_method', 'PUT')}}
        {{ Form::submit('Update', ['class' => 'btn btn-primary'] ) }}
    {!! Form::close() !!}   
@endsection
