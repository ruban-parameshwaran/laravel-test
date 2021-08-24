@extends('layouts.app')
@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-10">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">{{session('success')}}</div>
                @endif
                @if (count($posts) > 0)
                    @foreach($posts as $post)
                    <div class="card mt-3 mb-5">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->body}}</p>
                            <hr>
                            <small>Writen on {{$post->created_at}} by </small><br><br>
                            <a href="/posts/{{$post->id}}" class="btn btn-primary">view</a>
                        </div>
                    </div>
                @endforeach
                @else
                    <h3>Sorry, No posts avilable..</h3>
                @endif
                <!-- Pagination -->
                {{$posts->links()}}
           </div>
       </div>
   </div>
@endsection