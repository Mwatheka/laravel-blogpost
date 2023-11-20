@extends('layouts.app')
@section('content')
<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h1 class="display-one" style="text-align:center;">{{ ucfirst($post->title) }}</h1>
        <p class="postbody">{!! $post->body !!}</p>
      </div>      
    </div>
    <hr>
    <div class="container button-container">
        <div class="row mt-3">
            <div class="col-md-4 mb-2 text-center text-md-left">
                <a href="/blog" class="btn btn-primary">Go back</a>
            </div>
            <div class="col-md-4 mb-2 text-center">
                <a href="/blog/{{ $post->id }}/edit" class="btn btn-success">Edit Post</a>
            </div>
            <div class="col-md-4 mb-2 text-center text-md-right">
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
