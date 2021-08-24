@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-body">
                      <h3 class="card-title">{{config('app.name','My blog')}}</h3>
                      <p class="card-text">Don't have an account, just create a free account...!</p>
                      <a href="#" class="btn btn-success">Login</a>
                      <a href="#" class="btn btn-primary">Register an Account</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection