@extends('layouts.master')

<link rel="stylesheet" href="{{ asset('assets/css/car_models_details.css') }}"/>

@section('section_content')
    @include('layouts.sub_hero')


    <section class="section">
        <div class="container">
            <div class="row">

                <div class="col">
                    <h2>{{ $modelsInfo->name }}</h2>
                </div>

            </div>

            <div class="container mt-3">
                <div class="row models-content">
                    {!! $modelsInfo->models_discription !!}
                </div>
            </div>
        </div>
        <!--end container-->

        <div class="container-fluid px-0 py-5 my-5">
            <div class="row g-0 p-0 m-0">
                <div class="col-md-6 p-0 m-0 d-table">
                    <div class="col-md-6 p-0 m-0 pic d-inline-block w-50 h-auto model-box model-box1">

                    </div>
                    <div class="col-md-6 p-0 m-0 pic d-inline-block w-50 h-auto model-box model-box2">

                    </div>
                    <div class="col-12 p-0 m-0 pic d-block h-auto model-box model-box3">

                    </div>
                </div>
                <div class="col-md-6 p-0 m-0 d-table">
                    <div class="col-12 p-0 m-0 pic d-block h-auto model-box model-box4">

                    </div>
                    <div class="col-md-6 p-0 m-0 pic d-inline-block w-50 h-auto model-box model-box5">

                    </div>
                    <div class="col-md-6 p-0 m-0 pic d-inline-block w-50 h-auto model-box model-box6">

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h5>FULL SPECIFICATION</h5>
                <div class="accordion2" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFeature">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFeature" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseFeature">
                                特色
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFeature" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingFeature">
                            <div class="accordion-body">
                                <div class="row g-0">
                                    @foreach (json_decode($modelsInfo->features, true) as $value)
                                        <div class="col-md-6 pack-item">－ {{ $value }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSpecification">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseSpecification" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseSpecification">
                                規格
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSpecification" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingSpecification">
                            <div class="accordion-body">
                                <div class="row g-0">
                                    @foreach (json_decode($modelsInfo->specification, true) as $key => $value)
                                        <div class="col-md-6 pack-item">－ {{ $key . '： ' . $value }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseOne">
                                <img src="{{ asset('assets/img/models/s-pack.svg') }}" class="img-fluid"
                                    style="width: 150px;" alt="{{ __('') }}">
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="row g-0">
                                    @foreach (json_decode($modelsInfo->s_pack, true) as $value)
                                        <div class="col-md-6 pack-item">－ {{ $value }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                <img src="{{ asset('assets/img/models/r-pack.svg') }}" class="img-fluid"
                                    style="width: 150px;" alt="{{ __('') }}">
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div class="row g-0">
                                    @foreach (json_decode($modelsInfo->r_pack, true) as $value)
                                        <div class="col-md-6 pack-item">－ {{ $value }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->

    <script>
        function donearr(num, arr) {
            var newArray = [];
            for (var index = 0; index < num; index++) {
                var n = Math.floor(Math.random() * arr.length);
                newArray.push(arr[n]);
                arr.splice(n, 1);
            }
            return newArray;
        }

        var imgArr = <?php echo $modelsInfo->models_img; ?>;
        var env_url = <?php echo env('APP_URL') . '/uploads/' ?>;
        $.each(donearr(6, imgArr), function(index, value) {
            $('.model-box' + (index + 1)).append('<a href="' + env_url + value +'" data-fancybox>' +
                '<img src="' + env_url + value +'" class="img-fluid model-img" alt="">' +
                '<div class="search-icon d-none"><span><i class="fas fa-search"></i></span></div>' +
                '</a>');
        });
    </script>
@endsection
