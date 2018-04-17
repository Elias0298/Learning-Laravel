@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <br/>
    <br/>
    <button type="button" class="btn btn-outline-primary btn-sm"><a href="/posts" class="btn btn-default gray">Go Back</a></button>
@endsection