@extends('welcome')
@section('title','Sign in to your account')
@section('description','Sign in to enjoy your movies.')
<?php $tokens=bin2hex(openssl_random_pseudo_bytes(64));?>
@section('content')
<section class="fullscreen"
    data-bg-parallax="https://res.cloudinary.com/sarjanamalam/image/upload/v1586943903/movith/example/background-login-register_lfydul.jpg"
    style="padding-top:20px;">
    <div class="container">
        <div>
            <div class="row">
                <div class="col-lg-5 center p-50 background-white b-r-6">
                    @if(session('gagal'))
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Failed!</strong><br>{{session('gagal')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif
                    <h3>Login to your Account</h3>
                    <form action="/get-verification/{{$tokens}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="sr-only">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                        </div>
                        <div class="form-group m-b-5">
                            <label class="sr-only">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group form-inline text-left">
                            <div class="form-check">
                                <label>
                                    <input type="checkbox"><small class="m-l-10"> Remember me</small>
                                </label>
                            </div>
                        </div>
                        <div class="text-left form-group">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                    <p class="small">Don't have an account yet? <a href="sign-up">Register New Account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
