@extends('layouts.master')
<link rel="stylesheet" href="{{ asset('assets/css/car_models.css') }}?v=20230210"/>
@section('section_content')
    @include('layouts.sub_hero')

    <section class="section" style="background: #efefef;">
        <div class="container">
            <div class="row">
                <h4 class="mb-5 px-2 about-title">OUR MODELS</h4>
                <div class="col-12 swiper2 models-swiper2">

                    <div class="swiper-wrapper2 slick">
                        @foreach ($modelsInfo as $model)
                            <div class="swiper-slide2 models-box px-2">
                                <a href="/models/{{ $model->id }}">
                                    <img src="{{ $model->models_front_cover != '' ? env('APP_URL') . '/uploads/' . $model->models_front_cover : asset('assets/img/hero/super-seven-600-hp-hero.jpg') }}"
                                        class="img-fluid mb-3" alt="{{ __('') }}">
                                    <h5>{{ $model->name }}</h5>
                                    <span>{{ $model->category != '' || $model->category != null ? $model->category : ''}}</span>
                                </a>
                            </div>
                        @endforeach
                        {{-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div> --}}
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section element-animate">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-4 pr-md-5 mb-3">
                    <div class="block-41">
                        <h4 class="mb-5 about-title">EXPLORE THE SEVEN</h4>
                        <div class="" style="font-size: 1rem;">
                            In this era of automation and technology, it’s too easy to let science do everything for you.
                            Your car can now park itself and moves are afoot to allow it to drive you around too.<br><br>

                            At Caterham we hold to the theory that ‘less, is more’.<br><br>

                            That’s why each of our Sevens are engineered to deliver a driving experience, they aren’t simply
                            vehicles to propel you from point A to point B, but to gain all there is from that journey, fun!
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="block-41">
                        <div class="block-41-text text-center">
                            <img src="{{ asset('assets/img/models/explore-the-seven.png') }}" class="img-fluid"
                                style="" alt="{{ __('') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="block-41">
                        <div class="block-41-text">
                            <div class="d-block text-center mb-4">
                                <img src="{{ asset('assets/img/models/model-icon1.svg') }}" class="img-fluid mb-3"
                                    style="width: 15%;" alt="{{ __('') }}">
                                <h5>TUBULAR STEEL CHASSIS</h5>
                                <p style="font-size: 1rem;">
                                    Simple physics. Nothing on four wheels is as light as us.
                                </p>
                            </div>
                            <div class="d-block text-center mb-4">
                                <img src="{{ asset('assets/img/models/model-icon2.svg') }}" class="img-fluid mb-3"
                                    style="width: 15%;" alt="{{ __('') }}">
                                <h5>POWER VS. WEIGHT</h5>
                                <p style="font-size: 1rem;">
                                    At a little over 440kg and with engines ranging from 84 to 310bhp, the Seven offers a
                                    broad range of performance from swift to astonishing.
                                </p>
                            </div>
                            <div class="d-block text-center mb-4">
                                <img src="{{ asset('assets/img/models/model-icon3.svg') }}" class="img-fluid mb-3"
                                    style="width: 15%;" alt="{{ __('') }}">
                                <h5>RAW MECHANICAL PLEASURE</h5>
                                <p style="font-size: 1rem;">
                                    No driver aids or frills, just direct feedback- a pure and responsive driving
                                    experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- <div class="row justify-content-center align-content-center">
                <div class="col-12 mb-4 text-center seven-separator">
                    <img src="{{ asset('assets/img/about/7-badge.svg') }}" class="img-fluid" alt="{{ __('') }}">
                </div>

                <div class="col-md-4">
                    <h4>THE ICONIC SEVEN</h4>
                    Caterham and the Seven have a history that is forever entwined. We are the proud custodians of Seven, the people who know and love this car. We are the passion and engineering behind today’s incarnations of Chapman’s design. Uniquely British and sometimes quirky in our ways, we see it as our duty to push the envelope and boundaries of this little car to its absolute maximum, while retaining the
                </div>
                <div class="col-md-4">
                    driving purity and racing spirit that defined the original and made it an icon.
                    Our model range may be one model, and it may not be mainstream. But its nuanced variants encompass everything a true driver wants from a car. From the Sunday cruiser to the track day enthusiast to the wannabe racing driver, you will find a Caterham Seven to suit. And, it’s hand-built, backed by an ideology and heritage that is unequaled in our sector.
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/about/the-iconic-seven-1.png') }}" class="img-fluid" alt="{{ __('') }}">
                </div>
            </div> --}}
        </div>
    </section>

    <section class="section bg-dark">
        <div class="container">
            <div class="row">
                <h4 class="mb-3 about-title w-100 text-white">CHASSIS OPTIONS</h4>
                <span class="mb-5 text-white w-100">Choose from either a Standard Chassis or Large Chassis for extra
                    room*.</span>
                <div class="col-md-6">
                    <h5 class="mb-3 text-white">STANDARD</h5>
                    <img src="{{ asset('assets/img/models/standard-chassis_R.svg') }}" class="img-fluid"
                        alt="{{ __('') }}">
                </div>
                <div class="col-md-6">
                    <h5 class="mb-3 text-white">LARGE</h5>
                    <img src="{{ asset('assets/img/models/standard-chassis_R.svg') }}" class="img-fluid"
                        alt="{{ __('') }}">
                </div>
                <span class="mt-5 text-light">Standard Chassis will accommodate drivers approximately up to 6’2. Large
                    Chassis will accommodate drivers approximately up to 6’6.</span>
            </div>
        </div>
    </section>
@endsection
