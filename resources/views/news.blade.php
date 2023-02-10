@extends('layouts.master')

<link rel="stylesheet" href="{{ asset('assets/css/news.css') }}?v=20230210"/>

@section('section_content')
    @include('layouts.sub_hero')

    <section class="section element-animate">
        <div class="container">
            <div class="text-center mb-5 w-100 news-tab">
                <p><a href="{{ route('news.news') }}" class="{{ request()->is('news/news*') ? 'news-active' : '' }}"><span>新聞消息</span></a> ｜ <a href="{{ route('news.activity') }}" class="{{ request()->is('news/activity*') ? 'news-active' : '' }}"><span>活動消息</span></a></p>
            </div>

            <div class="overflow-auto mb-3">
                {{ $newInfo->onEachSide(1)->links() }}
            </div>

            <div class="row">


                @foreach ($newInfo as $item)
                @if ($item->show_status)
                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2">
                    <div class="card blog-post border-0 rounded shadow overflow-hidden h-100">
                        <img src="{{ $item->news_front_cover != '' ? env('APP_URL') . '/uploads/' . $item->news_front_cover : asset('assets/img/hero/super-seven-600-hp-hero.jpg') }}" class="img-fluid news-item-img" alt="">
                        <div class="card-body content p-4 newinfo-content">
                            <div class="d-flex">
                                <ul class="date text-center text-primary mr-3 mb-0 list-unstyled">
                                    <li class="day shadow2 h6 font-weight-bold mb-2">{{ date("d",strtotime($item->created_at)) }}</li>
                                    <li class="month h6 font-weight-bold">{{ date("M",strtotime($item->created_at)) }}</li>
                                </ul>
                                <a href="{{ url('news/'.$item->category.'/'.$item->id) }}" class="title text-dark h5 my-auto">{{ $item->title }}</a>
                            </div>

                            <div class="post-meta d-flex justify-content-end mt-3">
                                {{-- <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                </ul> --}}
                                <a href="{{ url('news/'.$item->category.'/'.$item->id) }}" class="text-muted readmore">More <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                @endif
                @endforeach


            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
@endsection
