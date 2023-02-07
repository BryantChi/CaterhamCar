<div class="top-shadow"></div>
<div class="inner-page">
    @if ($pageInfo->banner_img != '')
    <div class="slider-item" style="background-image: url('{{ url('uploads/' . $pageInfo->banner_img) }}');">

        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                    <h1 class="pt-5"><span></span></h1>
                    <p class="mb-5 w-75 pl-0"></p>
                </div>
            </div>
        </div>

    </div>
    @else
    <div class="slider-item" style="background-image: url('{{ asset('assets/img/about/about-01.jpg') }}');">

        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                    <h1 class="pt-5"><span></span></h1>
                    <p class="mb-5 w-75 pl-0"></p>
                </div>
            </div>
        </div>

    </div>
    @endif
</div>
<!-- END slider -->
