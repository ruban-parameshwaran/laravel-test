@extends('layout.app')
@section('content')
<h1 class="text-center">Create Post</h1>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger" role="alert"> {{$error}}</div>
            @endforeach
            <form method="POST" action="/posts">
                {{csrf_field()}}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Body</label>
                    <textarea name="body" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection