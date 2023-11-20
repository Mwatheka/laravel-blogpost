@extends('layouts.app')
@section('content')
    <div class="jumbotron" style="position: relative; overflow: hidden;">
    <div class="bg-image" style="background-image: url('blog.jpg'); filter: blur(10px); position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>This blog has multiple posts. Click on the blog to see the list of posts.</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="/blog" class="btn btn-primary">Show Posts</a>
            </div>
        </div>
    </div>
</div>

@endsection