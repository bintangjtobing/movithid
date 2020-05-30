@extends('welcome')
@section('title','Successfull registered!')
@section('description','Thanks for successfully sign up your account')
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
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <img class="img-congrats"
                                src="https://res.cloudinary.com/sarjanamalam/image/upload/v1588931394/movith/example/congrats_qzevyt.svg"
                                alt="">
                            <h3>Thank you {{$name}} for signing up!</h3>
                            <p>Terima kasih karna sudah mendaftarkan dirimu ke akun Movith.id. Kami akan
                                memverifikasikan akun kamu setelah kami mendapatkan informasi akurat dan terverifikasi
                                oleh tim kami. Kami akan meng-informasikan nya segera mungkin.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
