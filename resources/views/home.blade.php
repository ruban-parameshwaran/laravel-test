@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Posts</th>
                            <th scope="col"></th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        @foreach ($posts as $post)
                            <tbody>
                                <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td></td>
                                <td><a href="/posts/{{$post->id}}/edit">Edit</td>
                                <td><a href="/posts/delete/{{$post->id}}">Delete</td>
                                </tr>
                            </tbody>
                            {{$post}}
                        @endforeach
                      </table>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
