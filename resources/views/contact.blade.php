@extends('layouts.master')

@section('section_content')
    @include('layouts.sub_hero')

    <section class="section border-bottom">
        <div class="container">
            <div class="row">

                <div class="col-12 mb-4">

                    <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7281.646363622345!2d120.62356299999999!3d24.142847!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693dd7651b778d%3A0xbb47f28330ba021c!2z5b635ZyL5q2Q6aas5peX6Imm57i96YOoLeWPsOS4reWkluWMr-i7iuiyv-aYk-WVhu-8iOS5neatkOaXheihjOWutu-8iQ!5e0!3m2!1szh-TW!2stw!4v1671702734465!5m2!1szh-TW!2stw"
                        height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

                <div class="col-md-6 mb-5 order-2">
                    <form action="" method="post" role="form" name="contactUs">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">姓名</label>
                                <input type="text" id="name" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone">聯絡電話</label>
                                <input type="text" id="phone" class="form-control ">
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-12 form-group">

                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control " required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="content">聯絡內容</label>
                                <textarea name="content" id="content" class="form-control " cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-check mx-3 mb-3">
                                <input class="form-check-input" type="checkbox" value="true" name="clientMail" id="clientMail">
                                <label class="form-check-label" for="clientMail">
                                    發送一封副本至您的郵箱
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {{-- <input type="submit" value="填好送出" class="btn btn-primary px-3 py-3"> --}}
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <input type="submit" id="btnContactUs" value="發送" onclick="contactUsMailSend('{{ Route('ContactUsMail') }}')" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 order-2 mb-5">
                    <div class="row justify-content-right">
                        <div class="col-md-8 mx-auto contact-form-contact-info">
                            <p class="d-flex">
                                <span class="ion-ios-location icon mr-5"></span>
                                <span>{{ $pageInfo->address }}<br>
                                    <a href="https://goo.gl/maps/biKuasq6JusbMqXo7" target="_blank"
                                        class="text-primary">View on Google map</a></span>
                            </p>

                            <p class="d-flex mb-2">
                                <span class="ion-ios-alarm icon mr-5"></span>
                                <span>營業時間</span>
                            <div class="ml-5">
                                <ul class="list-unstyled footer-list">
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="fa-solid fa-clock"></i>
                                            <span style="">平日</span>&emsp;AM08:30-PM19:00</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot">&emsp; <span
                                                style="padding-end: 50px;">週六</span>&emsp;AM09:00-PM19:00</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot">&emsp; <span
                                                style="padding-end: 50px;">週日</span>&emsp;AM10:00-PM18:00</a></li>
                                </ul>
                            </div>

                            </p>

                            <p class="d-flex">
                                <span class="ion-ios-telephone icon mr-5"></span>
                                <span>聯絡電話<br><a href="tel:{{ $pageInfo->phone }}">{{ $pageInfo->phone }}</a></span>
                            </p>

                            <p class="d-flex">
                                <span class="ion-android-mail icon mr-5"></span>
                                <span>{{ $pageInfo->email }}</span>
                            </p>
                            <p>
                                <img src="{{ asset('assets/img/contact-card.jpg') }}" class="img-fluid" alt="{{ __('') }}">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <img src="{{ asset('assets/img/icon/企業品牌.jpg') }}" class="img-fluid" style="width: 18rem;" alt="{{ __('') }}">
                    </div>
                    <div class="col-md col-6 mb-3 mx-0 px-0">
                        <a href="www.9o-traveller.com.tw" target="_blank">
                            <img src="{{ asset('assets/img/icon/企業品牌_01.jpg') }}" class="img-fluid" alt="{{ __('') }}">
                        </a>
                    </div>
                    <div class="col-md col-6 mb-3 mx-0 px-0">
                        <a href="www.airstreamtw.com" target="_blank">
                            <img src="{{ asset('assets/img/icon/企業品牌_02.jpg') }}" class="img-fluid" alt="{{ __('') }}">
                        </a>
                    </div>
                    <div class="col-md col-6 mb-3 mx-0 px-0">
                        <a href="sunlight-camp.com.tw" target="_blank">
                            <img src="{{ asset('assets/img/icon/企業品牌_03.jpg') }}" class="img-fluid" alt="{{ __('') }}">
                        </a>
                    </div>
                    <div class="col-md col-6 mb-3 mx-0 px-0">
                        <a href="javascript:void(0)" target="_blank">
                            <img src="{{ asset('assets/img/icon/企業品牌_04.jpg') }}" class="img-fluid" alt="{{ __('') }}">
                        </a>
                    </div>
                    <div class="col-md col-6 mb-3 mx-0 px-0">
                        <a href="javascript:void(0)" target="_blank">
                            <img src="{{ asset('assets/img/icon/企業品牌_05.jpg') }}" class="img-fluid" alt="{{ __('') }}">
                        </a>
                    </div>
                    <div class="col-md col-6 mb-3 mx-0 px-0">
                        <a href="www.caterham.com.tw" target="_blank">
                            <img src="{{ asset('assets/img/icon/企業品牌_06.jpg') }}" class="img-fluid" alt="{{ __('') }}">
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        function contactUsMailSend(src) {
            if ($("#name").val() == "" || $("#phone").val() == "" || $("#email").val() == "" || $("#content").val() == "") {
                swal("錯誤！", "欄位請勿空白！！！", "error");
                return;
            }
            $("#btnContactUs").val("sending...");
            $("#btnContactUs").attr("disabled", true);

            swal({
                title: "確定送出？",
                // html: "按下確定後資料會永久刪除",
                type: "question",
                showCancelButton: true //顯示取消按鈕
            }).then(
                function(result) {
                    if (result.value) {

                        $.ajax({
                            url: src,
                            type: 'POST',
                            // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: $('form[name="contactUs"]').serialize(),
                            // {
                            //     _token: '{{ csrf_token() }}'
                            // },
                            success: function(res) {
                                var obj = $.parseJSON(res);
                                if (obj.status == "success") {
                                    swal("成功!", "聯絡信件已送出", "success").then(
                                        function(result) {
                                            if (result.value) {
                                                window.location.reload();
                                            }
                                        }
                                    );
                                } else {
                                    swal("錯誤!", "程序失敗", "error").then(
                                        function(result) {
                                            $("#btnContactUs").val("發送");
                                            $("#btnContactUs").attr("disabled", false);
                                        });
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                // $("#btnContactUs").html("發送");
                                // $("#btnContactUs").attr("disabled", false);
                                window.location.reload();
                            }
                        });
                    } else if (result.dismiss === "cancel") {
                        //使用者按下「取消」要做的事
                        swal("取消", "尚未送出", "error");
                    } //end else
                }); //end then
        }
    </script>
@endsection
