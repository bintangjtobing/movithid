@extends('welcome')
@section('title','Sign up your account')
@section('description','Be a member and enjoy your high quality movies also premium ads that have been contracted with
us.')
<?php $tokens=bin2hex(openssl_random_pseudo_bytes(64));?>
@section('content')
<section class="fullscreen" style="background-image:
    url(https://res.cloudinary.com/sarjanamalam/image/upload/v1586943903/movith/example/background-login-register_lfydul.jpg);
    padding-top:
    20px; ">
    <div class="container container-fullscreen">
        <div class="text-middle">
            <div class="row">
                <div class="col-lg-6 center p-20 background-white b-r-6">
                    @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible fade show" id="alert-success" role="alert">
                                {{$error}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <form class="form-transparent-grey" action="/create-account/{{$tokens}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Register New Account</h3>
                                <p>Create an account by entering the information below. </p>
                            </div>
                            <div class="col-lg-12">
                                <h3>Informasi Umum</h3>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Nama Lengkap</label>
                                <input type="text" name="name" placeholder="First Name" class="form-control" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Username</label>
                                <input type="text" value="" placeholder="Username" class="form-control" name="username"
                                    required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Email</label>
                                <input type="email" value="" placeholder="Email" name="email" class="form-control"
                                    required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Phone Number</label>
                                <input type="phone" value="" placeholder="Nomor Telepon" class="form-control"
                                    name="phone" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <label class="sr-only">Password</label>
                                <input type="password" value="" placeholder="Password" name="password"
                                    class="form-control" required>
                            </div>
                            <div class="col-lg-12">
                                <h3>Informasi Tambahan</h3>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Punya toko/cafe/yang lain?</label>
                                <select name="place" id="" class="form-control custom-select" required>
                                    <option>Pilih salah satu...</option>
                                    <option value="Toko">Toko</option>
                                    <option value="Cafe">Cafe</option>
                                    <option value="Rumah Makan/Restoran">Rumah Makan/Restoran</option>
                                    <option value="Tempat Lain">Tempat Lain</option>
                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Nama Toko</label>
                                <input type="text" name="placename" value=""
                                    placeholder="Nama Toko/Cafe/Rumah makan/Restoran" class="form-control" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <label class="sr-only">Kota</label>
                                <input type="text" name="city" value="" placeholder="Kota Domisili" class="form-control"
                                    required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <button class="btn" type="submit">Register New Account </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
