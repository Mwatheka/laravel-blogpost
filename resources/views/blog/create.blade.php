@extends('layouts.app')

@section('content')
<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>New Post</h1>
        <p>Create  a new post by filling the form shown</p>
      </div>
      <div class="col-md-6">
        <form action="" method="POST">
          @csrf
            <div class="input-group text-left">
                <div class="col-sm-6 form-group">
                    <label for="title">Post Title</label>
                    <input type="text" id="title" class="form-control" name="title"placeholder="Enter Post Title" required>
                </div>
            </div>
            <div class="control-form col-12 mt-2 text-left">
                <label for="body">Post Body</label>
                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body" rows="20" required></textarea>
            </div>
            <br>
            <div class="row mt-2">
                <div class="control-group col-12">
                    <div class="control-group col-12">
                        <button id="btn-submit" class="btn btn-success">
                            Create Post
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    <hr>
    <div class="row mt-3 text-center">
      <div class="col-md-12">
        <button type="button" class="btn btn-primary"><a href="/blog" style="color:white;">Go back</a></button>
      </div>
    </div>
  </div>
</div>
@endsection