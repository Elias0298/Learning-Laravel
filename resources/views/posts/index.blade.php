@extends('layouts.app')

@section('content')
    <a href="/posts/create"><button type="button" class="btn btn-primary float-right">Create</button></a>
    <h1>Posts</h1>
    @if(count($posts) >= 1)
        {{$posts->links()}}
        @foreach($posts as $post)
            <div class="card card-body bg-light mt-3">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts found.</p>
    @endif
@endsection