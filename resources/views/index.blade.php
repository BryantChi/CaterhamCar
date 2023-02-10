@extends('layouts.master')

@section('section_content')
    <div class="top-shadow"></div>

    <section class="home-slider owl-carousel {{ $slide_mob != null || $slide_mob != '' ? 'd-none d-md-block' : '' }}">
        @foreach ($slide as $item)
            <div class="slider-item"
                style="background-image: url('{{ 'uploads/' . $item->slide_img }}');">
                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center">
                        <div class="col-lg-7 text-center col-sm-12 element-animate">
                            <div
                                class="btn-play-wrap mx-auto {{ $item->video_url != null && $item->video_url != '' ? '' : 'd-none' }}">
                                <p class="mb-4"><a href="{{ $item->video_url }}" data-fancybox data-ratio="2"
                                        class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                            </div>
                            <h1 class="mb-4"><span>{{ $item->title }}</span></h1>
                            <p class="mb-5 w-75">{{ $item->sub_title }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <div class="slider-item" style="background-image: url('{{ asset('assets/img/hero/super-seven-hero-v2-1.jpg') }}');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <div class="btn-play-wrap mx-auto">
                            <p class="mb-4"><a href="https://cms.caterhamcars.com/wp-content/uploads/2022/09/SuperSevenFinal_SocialCut_30sec_16.9_1080-1.mp4" data-fancybox data-ratio="2"
                                    class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                        </div>
                        <h1 class="mb-4"><span>The New Super Seven 2000</span></h1>
                        <p class="mb-5 w-75">An Icon Remastered</p>
                    </div>
                </div>
            </div>
        </div> --}}


        {{-- <div class="slider-item" style="background-image: url('{{ asset('assets/img/hero/super-seven-600-hp-hero.jpg') }}');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <div class="btn-play-wrap mx-auto">
                            <p class="mb-4"><a href="https://cms.caterhamcars.com/wp-content/uploads/2022/09/SuperSevenFinal_SocialCut_30sec_16.9_1080-1.mp4" data-fancybox data-ratio="2"
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
                            <p class="mb-4"><a href="https://cms.caterhamcars.com/wp-content/uploads/2021/09/Caterham-170-UK_EU_FINAL.mp4" data-fancybox data-ratio="2"
                                    class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                        </div>
                        <h1><span>CATERHAM SEVEN CHAMPIONSHIP UK TO SUPPORT BTCC AT SILVERSTONE</span></h1>
                        <p class="mb-5 w-75">Caterham and BTCC organiser TOCA announce Silverstone National support race for 2023</p>
                    </div>
                </div>
            </div>

        </div> --}}

    </section>

    @if ($slide_mob != null || $slide_mob != '')
        <section class="home-slider owl-carousel d-block d-md-none">
            @foreach ($slide_mob as $item)
                <div class="slider-item"
                    style="background-image: url('{{ 'uploads/' . $item->slide_img }}');">
                    <div class="container">
                        <div class="row slider-text align-items-center justify-content-center">
                            <div class="col-lg-7 text-center col-sm-12 element-animate">
                                <div
                                    class="btn-play-wrap mx-auto {{ $item->video_url != null && $item->video_url != '' ? '' : 'd-none' }}">
                                    <p class="mb-4"><a href="{{ $item->video_url }}" data-fancybox data-ratio="2"
                                            class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                                </div>
                                <h1 class="mb-4"><span>{{ $item->title }}</span></h1>
                                <p class="mb-5 w-75">{{ $item->sub_title }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    @endif
    <!-- END slider -->
    <script>
        $(function(){
            $('.btn-play').click(function() {
                $('.home-slider').trigger('stop.owl.autoplay');
            });
            // $('.fancybox-button').click(function() {
            //     $('.home-slider').trigger('play.owl.autoplay',[1000]);
            // });
            // if ($(".fancybox-container").length == 0) {
            //     $('.home-slider').trigger('play.owl.autoplay');
            // }
            $('body').on('DOMNodeRemoved', '.fancybox-container', function (e) {
                //console.log(e.target);
                // console.log('removed!');
                $('.home-slider').trigger('play.owl.autoplay');
            });
        })

    </script>
@endsection
