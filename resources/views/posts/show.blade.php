@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <br/>
    <br/>
    <a href="/posts"><button type="button" class="btn btn-primary" href="/posts">Go Back</button></a>
@endsection