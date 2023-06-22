@extends('layouts.frontend.appnew')

@section('content')


  <div class="body-inner">

    @include('layouts.frontend.topbar')
    <!--/ Topbar end -->
<!-- Header start -->
@include('layouts.frontend.header')
<!--/ Header end -->

<div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/images/news/berita2.jpg')}})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">{{$title}}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">{{$title2}}</a></li>
                      <li class="breadcrumb-item"><a href="#">{{$subtitle}}</a></li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 mb-5 mb-lg-0">
        <div class="post">

          <div class="post-body">
            <div class="entry-header">
              <h1 class="entry-title">
         
                <a href="news-single.html"><h2 style="margin-top:-35px;">Statistika Layanan Informasi Publik</h2></a>
              </h1>
            </div><!-- header end -->

            <div class="entry-content">
              <div class="card-deck">
                <div class="card text-white bg-success">
                  <div class="card-body">
                    <h5 class="card-title"  style="text-align: center;">Daftar Informasi Publik</h5>
                    <p class="card-text font-weight-bold" style=" font-size: 40px;text-align: center;">{{ $jumlahinfopublik }}<p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body text-white bg-danger">
                    <h5 class="card-title"  style="text-align: center;">Jumlah Permohonan</h5>
                    <p class="card-text font-weight-bold" style=" font-size: 40px;text-align: center;">{{ $jumlahpermohonan }}<p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body text-white bg-warning">
                    <h5 class="card-title"  style="text-align: center;">Jumlah Keberatan</h5>
                    <p class="card-text font-weight-bold" style=" font-size: 40px;text-align: center;">{{ $jumlahkeberatan }}<p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body text-white bg-info">
                    <h5 class="card-title"  style="text-align: center;">Permohonan Selesai</h5>
                    <p class="card-text font-weight-bold" style=" font-size: 40px;text-align: center;">{{ $jumlahselesai }}<p>
                  </div>
                </div>
              </div><br>
              <div>
                <canvas id="myChart"></canvas>
              </div>

 
            </div>
          </div><!-- post-body end -->
        </div><!-- 1st post end -->

       
      </div><!-- Content Col end -->


</div><!-- Container end -->
</section><!-- Main container end -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo('['.implode(',', $grafikbulan).']') ?>,
      datasets: [{
        label: 'Rata - Rata Penyelesaian Permohonan',
        data: <?php echo('['.implode(',', $grafikjumlah).']') ?>,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

@include('layouts.frontend.footer')<!-- Footer end -->

@endsection
