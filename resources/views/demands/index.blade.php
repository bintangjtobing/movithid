@extends('demands.welcome')
@section('title','On Demands')
@section('description')
@section('content')
<section class="apps">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="">
                    <h4><img class="weather-img"
                            src="https://res.cloudinary.com/sarjanamalam/image/upload/v1587367217/movith/rain_thunder_zwvoo7.svg"
                            alt="Weather"></h4>
                    <h4>{{$data->cityName}} | 30<sup>o</sup>C</h4>
                    <p>{{$data->latitude}}, {{$data->longitude}}</p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="col-part">
                    <h4>Updated News:</h4>
                    <p>Kabar Baik Covid-19: 606.677 Orang Sembuh | Israel Negara Teraman</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 m-t-15">
                <div class="boxoffice">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video id="vid" class="embed-responsive-item" loop="true" preload="auto" autoplay="autoplay"
                            allowfullscreen muted>
                            <source
                                src="https://res.cloudinary.com/sarjanamalam/video/upload/v1587372262/movith/video/Mengurangi_Penggunaan_Pelastik_lf5qeg.mp4"
                                type="video/mp4">
                            <source
                                src="https://res.cloudinary.com/sarjanamalam/video/upload/v1587372264/movith/video/LOGO_OPENER_-_imedia_16_hsiccq.mp4"
                                type="video/mp4">
                            <source
                                src="https://res.cloudinary.com/sarjanamalam/video/upload/v1587372261/movith/video/imediaproperti_vah57s.mp4"
                                type="video/mp4">
                            <source
                                src="https://res.cloudinary.com/sarjanamalam/video/upload/v1587372261/movith/video/LOGO_OPENER_-_IMEDIA_14_mempr1.mp4"
                                type="video/mp4">
                        </video>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 m-t-30">
                <div class="boxoffice">
                    <h4>Box Offices</h4>
                    <div class="carousel" data-items="3" data-dots="false" data-lightbox="gallery">
                        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                            <div class="portfolio-item-wrap">
                                <div class="portfolio-image">
                                    <a href="#"><img
                                            src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/space-movie-poster-design-template-18133e937d93002c68b4649ea234d75f_screen.jpg?ts=1573539500"
                                            alt="" class="filmposter"></a>
                                </div>
                                <div class="portfolio-description">
                                    <a title="Paper Pouch!" data-lightbox="iframe"
                                        href="https://www.youtube.com/watch?v=Rm4VnwCtQO8"><i class="icon-play"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                            <div class="portfolio-item-wrap">
                                <div class="portfolio-image">
                                    <a href="#"><img
                                            src="https://cdn11.bigcommerce.com/s-ydriczk/products/88314/images/91406/Blade-Runner-2049-Final-Style-Poster-buy-original-movie-posters-at-starstills__83407.1519904794.450.659.jpg?c=2"
                                            alt="" class="filmposter"></a>
                                </div>
                                <div class="portfolio-description">
                                    <a title="Paper Pouch!" data-lightbox="iframe"
                                        href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="icon-play"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                            <div class="portfolio-item-wrap">
                                <div class="portfolio-image">
                                    <a href="#"><img
                                            src="https://www.mauvais-genres.com/26247/avengers-endgame-original-movie-poster-15x21-in-2019-anthony-russo-robert-downey-jr.jpg"
                                            alt="" class="filmposter"></a>
                                </div>
                                <div class="portfolio-description">
                                    <a title="Paper Pouch!" data-lightbox="iframe"
                                        href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="icon-play"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                            <div class="portfolio-item-wrap">
                                <div class="portfolio-image">
                                    <a href="#"><img src="https://i.redd.it/amww3trro6s31.jpg" alt=""
                                            class="filmposter"></a>
                                </div>
                                <div class="portfolio-description">
                                    <a title="Paper Pouch!" data-lightbox="iframe"
                                        href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="icon-play"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                            <div class="portfolio-item-wrap">
                                <div class="portfolio-image">
                                    <a href="#"><img
                                            src="https://i.pinimg.com/originals/79/13/78/791378da2a7e05b0dec7a93239516a59.png"
                                            alt="" class="filmposter"></a>
                                </div>
                                <div class="portfolio-description">
                                    <a title="Paper Pouch!" data-lightbox="iframe"
                                        href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="icon-play"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                            <div class="portfolio-item-wrap">
                                <div class="portfolio-image">
                                    <a href="#"><img
                                            src="https://www.joblo.com/assets/images/joblo/posters/2020/03/extraction_netflix_xlg.jpg"
                                            alt="" class="filmposter"></a>
                                </div>
                                <div class="portfolio-description">
                                    <a title="Paper Pouch!" data-lightbox="iframe"
                                        href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="icon-play"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
</section>
@endsection
