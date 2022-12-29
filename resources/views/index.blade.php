@extends('layouts.master')

@section('section_content')
    <div class="top-shadow"></div>

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('{{ asset('assets/img/hero/super-seven-hero-v2-1.jpg') }}');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <div class="btn-play-wrap mx-auto">
                            <p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                    class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                        </div>
                        <h1 class="mb-4"><span>The New Super Seven 2000</span></h1>
                        <p class="mb-5 w-75">An Icon Remastered</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('{{ asset('assets/img/hero/super-seven-600-hp-hero.jpg') }}');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <div class="btn-play-wrap mx-auto">
                            <p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                    class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                        </div>
                        <h1><span>The New Super Seven 600</span></h1>
                        <p class="mb-5 w-75">Another Icon Remastered</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="slider-item" style="background-image: url('{{ asset('assets/img/hero/Picture1.jpg') }}');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <div class="btn-play-wrap mx-auto">
                            <p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                    class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                        </div>
                        <h1><span>CATERHAM SEVEN CHAMPIONSHIP UK TO SUPPORT BTCC AT SILVERSTONE</span></h1>
                        <p class="mb-5 w-75">Caterham and BTCC organiser TOCA announce Silverstone National support race for 2023</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- END slider -->
@endsection
