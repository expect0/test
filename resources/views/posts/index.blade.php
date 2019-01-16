@extends('layouts.app')

@section('content')
    <h1>Posts</h3>
     @if(count($posts) >= 1)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/sajt/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            
        </div>
            
            
        @endforeach
     @else 
        <p>No posts found</p>
    @endif
@endsection