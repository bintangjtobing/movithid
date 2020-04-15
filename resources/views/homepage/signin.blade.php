@extends('welcome')
@section('content')
<section class="fullscreen"
    data-bg-parallax="https://res.cloudinary.com/sarjanamalam/image/upload/v1586943903/movith/example/background-login-register_lfydul.jpg"
    style="padding-top:20px;">
    <div class="container">
        <div>
            <div class="row">
                <div class="col-lg-5 center p-50 background-white b-r-6">
                    <h3>Login to your Account</h3>
                    <form>
                        <div class="form-group">
                            <label class="sr-only">Username</label>
                            <input type="text" class="form-control" placeholder="Username" autofocus>
                        </div>
                        <div class="form-group m-b-5">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group form-inline text-left">
                            <div class="form-check">
                                <label>
                                    <input type="checkbox"><small class="m-l-10"> Remember me</small>
                                </label>
                            </div>
                        </div>
                        <div class="text-left form-group">
                            <button type="button" class="btn">Login</button>
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
