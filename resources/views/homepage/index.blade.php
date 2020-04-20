@extends('welcome')
@section('title','1st Advertise Indoor TV')
@section('description','Hi Movith-er! Enjoy your movies on our platform. We are the 1st advertise indoor tv in
Indonesia')
@section('content')
<div id="slider" class="inspiro-slider slider-halfscreen dots-creative" data-height-xs="360" data-autoplay="2600"
    data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">

    <div class="slide background-image"
        style="background-image:url('https://res.cloudinary.com/sarjanamalam/image/upload/v1586850034/movith/example/poster-1_ulszbm.jpg');">
        {{-- <div class="bg-overlay"></div> --}}
    </div>
    <div class="slide background-image"
        style="background-image:url('https://res.cloudinary.com/sarjanamalam/image/upload/v1586850034/movith/example/poster-2_x7ma9s.jpg');">
        {{-- <div class="bg-overlay"></div> --}}
    </div>
    <div class="slide background-image"
        style="background-image:url('https://res.cloudinary.com/sarjanamalam/image/upload/v1586850034/movith/example/poster-3_oumvtj.jpg');">
        {{-- <div class="bg-overlay"></div> --}}
    </div>
</div>
<section class="section-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-t-100">
                <h1>1<sup>st</sup> Advertise Indoor TV.
                </h1>
                <h3>Reach out and watch your project on our client's Smart TV and get more offers on advertising on
                    our indoor TV.</h3>
            </div>
            <div class="col-lg-4">
                <img src="https://res.cloudinary.com/sarjanamalam/image/upload/v1586857376/movith/example/Apple_TV_Mockup_oqpnxi.png"
                    alt="">
            </div>
        </div>
    </div>
</section>
<section class="section-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-left">
                <img src="https://res.cloudinary.com/sarjanamalam/image/upload/v1586940436/movith/example/iphone-half_lcyesy.png"
                    alt="" class="iphone-sec2">
            </div>
            <div class="offset-2 col-lg-6 m-t-100">
                <h1>Easy request like watching videos.
                </h1>
                <h3>No need to worry about how difficult it will be to request us offers and advertisements. Watch
                    videos, watch advertisements that have aired and request company offers can be accessed on the
                    application.</h3>
                <div>
                    <a href="#" class="btn btn-danger btn-lg"><i class="fab fa-android"></i> Android</a>
                    <a href="#" class="btn btn-danger btn-lg"><i class="fab fa-apple"></i> iOS</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-dark" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center m-b-30">
                <h1>Frequently Asked Questions</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion dark">
                    <div class="ac-item">
                        <h5 class="ac-title">What is Movith</h5>
                        <div class="ac-content">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                mornings of spring which I enjoy with my whole heart.</p>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for
                                the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                                exquisite sense of mere tranquil existence, that I neglect my talents. I should
                                be incapable of drawing a single stroke at the present moment; and yet I feel
                                that I never was a greater artist than now. </p>
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">How can i advertise on Movith?</h5>
                        <div class="ac-content">
                            <p>When, while the lovely valley teems with vapour around me, and the meridian sun
                                strikes the upper surface of the impenetrable foliage of my trees, and but a few
                                stray gleams steal into the inner sanctuary.</p>
                            <p>I throw myself down among the tall grass by the trickling stream; and, as I lie
                                close to the earth, a thousand unknown plants are noticed by me</p>
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">How do i cancel?</h5>
                        <div class="ac-content">
                            <p>As it floats around us in an eternity of bliss; and then, my friend, when
                                darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
                                absorb its power, like the form of a beloved mistress</p>
                            <p>I often think with longing, Oh, would I could describe these conceptions, could
                                impress upon paper all that is living so full and warm within me, that it might
                                be the mirror of my soul, as my soul is the mirror of the infinite God! O my
                                friend — but it is too much for my strength — I sink under the weight of the
                                splendour of these visions!”</p>
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">What can i watch on Movith?</h5>
                        <div class="ac-content">
                            <p>As it floats around us in an eternity of bliss; and then, my friend, when
                                darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
                                absorb its power, like the form of a beloved mistress</p>
                            <p>I often think with longing, Oh, would I could describe these conceptions, could
                                impress upon paper all that is living so full and warm within me, that it might
                                be the mirror of my soul, as my soul is the mirror of the infinite God! O my
                                friend — but it is too much for my strength — I sink under the weight of the
                                splendour of these visions!”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
