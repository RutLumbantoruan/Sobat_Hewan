@extends('theme.main',["title" => "Home"])
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="heading-block">
                        <h1>Selamat datang<br>di SobatHewan.</h1>
                    </div>
                    <p class="lead">Kamu dapat mendonasikan ataupun mengadopsi hewan di platform kami,<br>Adapun tujuan
                        website ini dibangun adalah agar tidak ada hewan-hewan yang terlantar</p>
                </div>
                <div class="col-lg-7 align-self-end">
                    <div class="position-relative overflow-hidden">
                        <img src="{{asset('images/dogs.jpg')}}" data-animate="fadeInUp" data-delay="100" alt="Chrome">
                        <img src="{{asset('images/cats.jpg')}}"
                            style="top: 0; left: 0; min-width: 100%; min-height: 100%;" data-animate="fadeInUp"
                            data-delay="400" alt="iPhone" class="position-absolute">
                    </div>
                </div>
            </div>
        </div>
        <div class="section my-0">
            <div class="container">
                <div class="row mt-4 col-mb-50">
                    <div class="col-lg-6">
                        <i class="i-plain color i-large icon-line2-screen-desktop inline-block"
                            style="margin-bottom: 15px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <h4>Adopsi Hewan</h4>
                        </div>
                        <p>Kami menyediakan banyak hewan peliharaan dengan jenis kucing dan anjing</p>
                    </div>
                    <div class="col-lg-6">
                        <i class="i-plain color i-large icon-line2-energy inline-block"
                            style="margin-bottom: 15px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <h4>DONASI HEWAN</h4>
                        </div>
                        <p>Kamu dapat mendonasikan hewan peliharaanmu di SobatHewan</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="section">
            <div class="container clearfix">
                <div class="heading-block topmargin-sm center">
                    <h3>TEAM KAMI</h3>
                </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="owl-carousel image-carousel carousel-widget flip-card-wrapper clearfix" data-margin="20" data-nav="true" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3" style="overflow: visible;">

                    <div class="flip-card">
                        <div class="flip-card-front dark">
                            <div class="flip-card-inner">
                                <div class="card nobg noborder">
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">Kevin</h3>
                                        <span class="font-italic">
                                        11320021
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card-back no-after">
                        <div class="flip-card-inner">
                                <img src="{{asset('images/kevin.JPG')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-front dark">
                            <div class="flip-card-inner">
                                <div class="card nobg noborder">
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">Havel</h3>
                                        <span class="font-italic">11320011</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back no-after">
                            <div class="flip-card-inner">
                                <img src="{{asset('images/havel.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-front dark">
                            <div class="flip-card-inner">
                                <div class="card nobg noborder">
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">Rut</h3>
                                        <span class="font-italic">11320043</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back no-after">
                            <div class="flip-card-inner">
                                <img src="{{asset('images/Rut.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-front dark">
                            <div class="flip-card-inner">
                                <div class="card nobg noborder">
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">Rafael</h3>
                                        <span class="font-italic">11320026</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back no-after">
                            <div class="flip-card-inner">
                                <img src="{{asset('images/rafael.JPG')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-front dark">
                            <div class="flip-card-inner">
                                <div class="card nobg noborder">
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">Nova</h3>
                                        <span class="font-italic">11320050</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back no-after">
                            <div class="flip-card-inner">
                                <img src="{{asset('images/Nova.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>


</section>
@endsection
