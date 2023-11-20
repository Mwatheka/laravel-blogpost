@extends('layouts.app')

@section('content')
<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <h1 class="display-4">Edit Post</h1>
      <p>Edit and submit this form to update a post</p>
      </div>
      <div class="col-md-6">
      <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="control-group col-12">
                <label for="title">Post Title</label>
                <input type="text" id="title" class="form-control" name="title"placeholder="Enter Post Title" value="{{ $post->title }}" required>
            </div>
            <div class="control-group col-12 mt-2">
                <label for="body">Post Body</label>
                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body" rows="5" required>{{ $post->body }}</textarea>
            </div>
        </div>
        <hr>
        <div class="row mt-2">
            <div class="control-group col-12">
                <button id="btn-submit" class="btn btn-success">
                    Update Post
                </button>
            </div>
        </div>
    </form>
</div>
</div>
<hr>
<div class="row mt-3 text-center">
    <div class="col-md-12">
        <a href="/blog" class="btn btn-primary btn-sm">Go back</a>
    </div>
</div>
</div>
</div>

@endsection