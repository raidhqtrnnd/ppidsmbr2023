@extends('layouts.frontend.appnew')

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>


@section('content')
    <div class="body-inner">

        @include('layouts.frontend.topbar')
        <!--/ Topbar end -->
        <!-- Header start -->
        @include('layouts.frontend.header')
        <!--/ Header end -->

        {{-- <div id="banner-area" class="banner-area"
            style="background-image:url({{ asset('frontend/images/news/berita2.jpg') }})">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-heading">
                                <h1 class="banner-title"></h1>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end --> --}}

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3800">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="frontend/images/news/berita2.png" class="d-block w-100" alt="Satpolpp">
                </div>
                <div class="carousel-item">
                    <img src="frontend/images/news/berita1.png" class="d-block w-100" alt="Satpolpp">
                </div>
                <div class="carousel-item">
                    <img src="frontend/images/news/berita3.png" class="d-block w-100" alt="Satpolpp">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- <script>
            var myCarousel = document.querySelector('#myCarousel')
            var carousel = new bootstrap.Carousel(myCarousel)
        </script> --}}

        <!-- Content Pertama-->
        @include('layouts.frontend.content2')

        <section id="ts-features" class="ts-features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ts-intro">
                            <h8 class="into-sub-title"
                                style="font-size: 36px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: -0.5px; color: #212121; font-weight: 700; font-family: Montserrat, sans-serif;
                text-rendering: optimizeLegibility;">
                                PPID SATPOL PP SUMBAR </h8>
                            <p style="text-align:justify; width: 550px; margin-top: 30px;">Pejabat Pengelola Informasi dan
                                Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan,
                                pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.</p>
                        </div><!-- Intro box end -->

                        <div class="gap-20"></div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon">
                                        <i class="fas fa-trophy"></i>
                                    </span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title" style="color: #555; text-align:justify;">Memberikan
                                            Pelayanan Publik</h3>
                                    </div>
                                </div><!-- Service 1 end -->
                            </div><!-- col end -->

                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon">
                                        <i class="fas fa-sliders-h"></i>
                                    </span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title" style="color: #555; text-align:justify;">Meningkatkan
                                            Mutu Layanan</h3>
                                    </div>
                                </div><!-- Service 2 end -->
                            </div><!-- col end -->
                        </div><!-- Content row 1 end -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title" style="color: #555; text-align:justify;">Melakukan
                                            Evaluasi Sistem dan Prosedur</h3>
                                    </div>
                                </div><!-- Service 1 end -->
                            </div><!-- col end -->

                            {{-- <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon">
                                        <i class="fas fa-users"></i>
                                    </span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title" style="color: #555; text-align:justify;">Meningkatkan
                                            kompetensi sumberdaya manusia</h3>
                                    </div>
                                </div><!-- Service 2 end -->
                            </div><!-- col end --> --}}


                        </div><!-- Content row 1 end -->
                    </div><!-- Col end -->

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div id="gpr-kominfo-widget-container">
                            <div class="logo col-lg-3 text-center ">
                                <a class="d-block">

                                    <img src="{{ asset('frontend/images/visimisi.png') }}" alt="visimisi"
                                        style="width:470px; height:500px; margin-bottom: 10px; margin-top: 8px">
                                </a>




                            </div><!-- logo end -->
                        </div>

                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
    </div><!-- Container end -->
    </section><!-- Feature are end -->



    <!--/ subscribe end -->



    <!-- Content Kedua-->





    <!--/ News end -->

    @include('layouts.frontend.contact')



    @include('layouts.frontend.footer')
    <!-- Footer end -->
@endsection
