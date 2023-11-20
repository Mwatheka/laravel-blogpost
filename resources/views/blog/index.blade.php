@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>All Posts</h1>
                    <p>All posts that have been created are shown here. You can  read a post by clicking on it. You can also add new posts by clicking add post</p>
                </div>
                <div class="col-md-6">
                    <p> Posts</p>
                    @forelse($posts as $post)
                    <ul>
                    <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                    @empty
                    <p class="text-warning">No blog Posts available</p>
                    @endforelse
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-md-12 text-center">                    
                    <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>                    
                </div>
            </div>
        </div>
    </div>
@endsection