<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard | PPID </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend2/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend2/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('backend2/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend2/assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('backend2/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend2/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('backend2/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend2/assets/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>

    @extends('admin.appnew')

    @section('content')
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg">

                    @include('admin.navbar')

                    @include('admin.sidebar')

                    <!-- Main Content -->
                    <div class="main-content">
                        <section class="section">
                            <div class="section-header">
                                <h1>Table</h1>
                                <div class="section-header-breadcrumb">
                                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                                    <div class="breadcrumb-item"><a href="#">Informasi Publik</a></div>
                                    <div class="breadcrumb-item">{{ $judul }}</div>
                                </div>
                            </div>

                            <div class="content-body">

                                <div class="container-fluid">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-10">
                                            <div class="card"
                                                style="padding-left:20px; padding-right:20px; padding-top:20px;">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $judul }}</h4>
                                                    <br>

                                                    @if (Session::has('success'))
                                                        <div class="btn btn-success text-white"
                                                            style="width:100%; height:40px">
                                                            <p>{{ Session::get('success') }}</p>
                                                        </div>
                                                        <br></br>
                                                    @endif

                                                    @if (Session::has('delete'))
                                                        <div class="btn btn-warning text-white"
                                                            style="width:100%; height:40px">
                                                            <p>{{ Session::get('delete') }}</p>
                                                        </div>
                                                        <br></br>
                                                    @endif

                                                    @if (Session::has('update'))
                                                        <div class="btn btn-info text-white"
                                                            style="width:100%; height:40px">
                                                            <p>{{ Session::get('update') }}</p>
                                                        </div>
                                                        <br></br>
                                                    @endif

                                                    @if (Session::has('failed'))
                                                        <div class="btn btn-danger text-white"
                                                            style="width:100%; height:40px">
                                                            <p>{{ Session::get('delete') }}</p>
                                                        </div>
                                                        <br></br>
                                                    @endif

                                                    <div class="form-validation">
                                                        <form class="form-valide"
                                                            action="{{ route('informasi_publik.daftar_informasi.publik.edit', $informasi_publik->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            {{ csrf_field() }}

                                                            <div class="form-group row">
                                                                <label class="col-lg-6 col-form-label"
                                                                    for="daftar_informasi">Daftar Informasi dan Dokumentasi
                                                                    Publik</label>
                                                                <div class="col-sm-12">
                                                                    <textarea class="summernote" name="daftar_informasi" class="form-control" required="" placeholder="Daftar Informasi">{!! $informasi_publik->daftar_informasi !!}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-6 col-form-label"
                                                                    for="ringkasan">Ringkasan Informasi</label>
                                                                <div class="col-sm-12">
                                                                    <textarea class="summernote" name="ringkasan" class="form-control" required="" placeholder="Ringkasan">{!! $informasi_publik->ringkasan !!}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-8 col-form-label" for="jenis">Jenis
                                                                    Informasi</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" id="jenis" name="jenis"
                                                                        class="form-control" required=""
                                                                        value="{{ $informasi_publik->jenis }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-8 col-form-label"
                                                                    for="jangka_waktu">Jangka Waktu</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" id="jangka_waktu"
                                                                        name="jangka_waktu" class="form-control"
                                                                        required=""
                                                                        value="{{ $informasi_publik->jangka_waktu }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-6 col-form-label"
                                                                    for="link">Link</label>
                                                                <div class="col-sm-12">
                                                                    <textarea class="summernote" name="link" class="form-control" required="" placeholder="Link">{!! $informasi_publik->link !!}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-lg-12 ml-auto">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #/ container -->
                    </div>

                    <!--**********************************
                Footer start
            ***********************************-->
                    @include('admin.footer')
                    <!--**********************************
                Footer end
            ***********************************-->
                </div>
                <!--**********************************
            Main wrapper end
        ***********************************-->
            @endsection
