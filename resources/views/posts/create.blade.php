@extends('layouts.app')

@section('content')

<br>

<div class="card text-white bg-dark mb-3">
    <div class="card-header">
        <legend>Create post</legend>
    </div>
    <div class="card-body">
        <form action="/posts" method="POST" enctype = 'multipart/form-data'>
            {{ csrf_field() }}
            <fieldset>

              <div class="form-group">
                <label for="title" class="col-form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" style="background-color: ivory;">
              </div>
              
              
              <div class="form-group">
                <label for="body">Content</label>
                <textarea class="form-control" id="body" rows="8" name="body" style="background-color: ivory;"></textarea>
              </div>
              
              <div class="form-group">
                <label for="image-upload">Image Upload</label>
                <input type="file" class="form-control-file" id="image-upload" name="image-upload">
              </div>
            
              <button type="submit" class="btn btn-success btn-lg" name="submit">Create</button>
              
            </fieldset>
        </form>
    </div>
  </div>
 
@endsection