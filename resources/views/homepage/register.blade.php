@extends('welcome')
@section('content')
<section class="fullscreen"
    style="background-image:
    url(https://res.cloudinary.com/sarjanamalam/image/upload/v1586943903/movith/example/background-login-register_lfydul.jpg)">
    <div class="container container-fullscreen">
        <div class="text-middle">
            <div class="row">
                <div class="col-lg-6 center p-20 background-white b-r-6">
                    <form class="form-transparent-grey">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Register New Account</h3>
                                <p>Create an account by entering the information below. </p>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">First Name</label>
                                <input type="text" value="" placeholder="First Name" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Username</label>
                                <input type="text" value="" placeholder="Username" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Email</label>
                                <input type="text" value="" placeholder="Email" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Password</label>
                                <input type="password" value="" placeholder="Password" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Apartment, suite, unit etc.</label>
                                <input type="text" value="" placeholder="Apartment, suite, unit etc."
                                    class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Town / City</label>
                                <input type="text" value="" placeholder="Town / City" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">State / County</label>
                                <input type="text" value="" placeholder="State / County" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Postcode / Zip</label>
                                <input type="text" value="" placeholder="Postcode / Zip" class="form-control">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label class="sr-only">Phone</label>
                                <input type="text" value="" placeholder="Phone" class="form-control">
                            </div>
                            <div class="col-lg-12 form-group">
                                <button class="btn" type="button">Register New Account </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
