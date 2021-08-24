@extends('layout.app')
@section('content')
   <div class="container">
       <div class="row">
           <col-md-3><a href="/posts" class="btn btn-primary">Back</a></col-md-3>
       </div>
       <div class="row">
           <div class="col-md-10">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$singlePost->title}}</h5>
                        <p class="card-text">{{$singlePost->body}}</p>
                        <hr>
                        <small>Writen on {{$singlePost->created_at}}</small><br>
                    </div>
                </div>
                <br><br>
                <a href="/posts/{{$singlePost->id}}/edit">Edit Post</a>
                <form action="/posts/{{$singlePost->id}}" method="POST">
                    {{csrf_field()}}
                    @method("DELETE")
                    <a href="/posts/delete/{{$singlePost->id}}" class="btn btn-danger">Delete</a>
                </form>
           </div>
       </div>
   </div>
@endsection