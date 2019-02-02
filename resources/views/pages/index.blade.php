@extends('layouts.app')

@section('content')
<br/>
<div class="container">
<main role="main">
    <div class="jumbotron">
        <div class="col-sm-8 mx-auto">
            <h1>{{$title}}</h1>
            <p>Ini Aplikasi laravel, halaman awal.</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                || <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
    </div>
</main>
</div>
@endsection

