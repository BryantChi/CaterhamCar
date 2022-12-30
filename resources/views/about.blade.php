@extends('layouts.master')

<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}"/>

@section('section_content')
    {{-- <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 element-animate ">
                    <div class="media block-6 d-block text-center">
                        <div class="icon mb-3"><span class="ion-bookmark text-primary"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Automotive Parts</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 element-animate ">
                    <div class="media block-6 d-block text-center">
                        <div class="icon mb-3"><span class="ion-heart text-primary"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Maintenance Services</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 element-animate ">
                    <div class="media block-6 d-block text-center">
                        <div class="icon mb-3"><span class="ion-leaf text-primary"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Green Energy</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    <!-- END section -->

    @include('layouts.sub_hero')

    <section class="section element-animate">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-5">
                {{-- <div class="col-lg-7 order-md-2">
                    <div class="">
                        <div class="frame"><img src="{{ asset('assets/img/about/about-01.jpg') }}" alt="Image" class="img-fluid rounded"></div>
                    </div>
                </div> --}}
                <div class="col-md-10 pr-md-5 mb-5">
                    <div class="block-41">
                        <h2 class="block-41-heading mb-5 about-title">About Us</h2>
                        <div class="block-41-text">
                            @if ($aboutUsInfo->content != null || $aboutUsInfo->content == "")
                                {!! $aboutUsInfo->content !!}
                            @endif
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center align-content-center">
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
            </div>
        </div>
    </section>

@endsection
