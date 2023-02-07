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
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write Message</label>
                                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary px-3 py-3">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 order-2 mb-5">
                    <div class="row justify-content-right">
                        <div class="col-md-8 mx-auto contact-form-contact-info">
                            <p class="d-flex">
                                <span class="ion-ios-location icon mr-5"></span>
                                <span>台中市南屯區環中路四段161號<br>
                                    <a href="https://goo.gl/maps/biKuasq6JusbMqXo7" target="_blank"
                                    class="text-primary">View on Google map</a></span>
                            </p>

                            <p class="d-flex mb-2">
                                <span class="ion-ios-alarm icon mr-5"></span>
                                <span>營業時間</span>
                                <div class="ml-5">
                                    <ul class="list-unstyled footer-list">
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="fa-solid fa-clock"></i> <span style="">平日</span>&emsp;AM08:30-PM19:00</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot">&emsp; <span style="padding-end: 50px;">週六</span>&emsp;AM09:00-PM19:00</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot">&emsp; <span style="padding-end: 50px;">週日</span>&emsp;AM10:00-PM18:00</a></li>
                                    </ul>
                                </div>

                            </p>

                            <p class="d-flex">
                                <span class="ion-ios-telephone icon mr-5"></span>
                                <span>聯絡電話<br><a href="tel:04-2380-4386">04-2380-4386</a></span>
                            </p>

                            <p class="d-flex">
                                <span class="ion-android-mail icon mr-5"></span>
                                <span>oma@o-ma.com.tw</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
