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
         
                <a href="news-single.html"><h2 style="margin-top:-35px;">Cek Status Permohonan Informasi Publik </h2></a>
              </h1>
            </div><!-- header end -->

            <div class="entry-content">
                <table>
                  <tr>
                    <td>Kode Permohonan </td>
                    <td> : </td>
                    <td><strong>{{ $permohonan->kode_permohonan }}</strong></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">Status Permohonan </td>
                    <td> : </td>
                    <td>
                      @if($permohonan->status_form == '1') <strong style="color:orange;"> Menunggu Tindak Lanjut</strong>
                                                     @elseif($permohonan->status_form == "2")  <strong style="color:purple;" >Proses Tindak Lanjut</strong>
                                                    @elseif($permohonan->status_form == "3") <strong style="color:green;" >Selesai Tindak Lanjut</strong>
                                                    @elseif($permohonan->status_form == "4")<strong style="color:red;"> Tidak bisa Ditindaklanjuti</strong>
                                                @else -
                                                @endif</td>

                  </tr>
                  <tr>
                    <td style="vertical-align:top">Nama Lengkap </td>
                    <td> : </td>
                    <td><strong>{{ $permohonan->nama_lengkap }}</strong></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">Kategori Permohonan </td>
                    <td> : </td>
                    <td>{{ $permohonan->kategori_permohonan }}</td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">NIP </td>
                    <td> : </td>
                    <td>{{ $permohonan->nik_nip }}</td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">Email </td>
                    <td> : </td>
                    <td>{{ $permohonan->email }}</td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">Telepon </td>
                    <td style="vertical-align:top"> : </td>
                    <td>{{ $permohonan->telepon }}</td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">Rincian Informasi </td>
                    <td style="vertical-align:top"> : </td>
                    <td>{!!  $permohonan->rincian_informasi !!}</td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">Tujuan </td>
                    <td style="vertical-align:top"> : </td>
                    <td>{!! $permohonan->tujuan !!}</td>
                  </tr>
                </table>
                <div class="text-left"><br>
                 <a href="/"> <button class="btn btn-primary solid blank" type="button">Kembali</button></a>
                </div>
            </div>
          </div><!-- post-body end -->
        </div><!-- 1st post end -->

       
      </div><!-- Content Col end -->
{{-- <div class="col-lg-4">

    <div class="sidebar sidebar-right">
        <div class="sidebar-item search-form">
            <h3 class="widget-title" style="margin-left:20px;">Search</h3>
            <form action="{{ route('reader.search.berita') }}" method="POST" class="mt-3"
                style="margin-left:20px;">
                @csrf
                <input type="text" value="{{ old('cari') }}" name="cari"
                    style="padding-right:10px; padding-left:10px;">
                <input type="submit" value="Search" style="color:white;"><i class="bi bi-search"></i></input>
            </form>
        </div><!-- End sidebar search formn-->
        <br>
        <div class="widget recent-posts">
            <h3 class="widget-title">Berita Terkini</h3>
            <ul class="list-unstyled">
                @foreach($beritaterkini as $data)
                    <li class="d-flex align-items-center" style="background-color: #EEF9FF;">
                        <div class="posts-thumb">
                            <?php if($data->thumbnail == null ){ ?>
                            <img loading="lazy"
                                src="{{ asset('backend2/assets/img/PECELAND-LOGO-VECTOR-980x693.jpg') }}"
                                class="img-fluid" alt="Gambar Default"
                                style="width:800px; height:400px; text-align: center;">
                            <?php }else{ ?>
                            <a href="#"><img loading="lazy" alt="img"
                                    src="{{ route('menu.file', encrypt($data->thumbnail)) }}"
                                    style="width: 100px; height: 100px; object-fit: cover;"></a>
                            <?php } ?>
                        </div>
                        <div class="post-info">
                            <h4 class="entry-title">
                                <?php $date = DateTime::createFromFormat("Y-m-d", $data->tgl_post);?>
                                <a
                                    href="{{ route('contents_blog', ['year'=>$date->format("Y"), 'month' => $date->format("m") , 'day' => $date->format("d"), 'slug'=>$data->slug] ) }}">{{ $data->judul }}</a>
                            </h4>
                        </div>
                    </li><!-- 1st post end-->
                @endforeach
            </ul>

        </div><!-- Recent post end -->

        <div class="widget widget-tags">
            <h3 class="widget-title">Kategori</h3>
            <div class="d-flex flex-wrap m-n1">
                <ul class="list-unstyled">
                    @foreach($categories as $kategori)
                        <li><a href="{{ route('contents_kategori', $kategori->slug) }}">{{ $kategori->nama_kategori }}
                                <span>({{ $kategori->posts->count() }})</span></a></li>
                    @endforeach
                </ul>
            </div>
            <!-- Categories end -->
        </div>
        <!-- Tags End -->

        <div class="widget widget-tags">
            <h3 class="widget-title">Tags </h3>

            <ul class="list-unstyled">
                @foreach($tags as $tag)
                    <li><a href="#">{{ $tag->jenis_tag }}</a></li>
                @endforeach
            </ul>
        </div><!-- Tags end -->
    </div><!-- Sidebar end -->
</div><!-- Main row end --> --}}

</div><!-- Container end -->
</section><!-- Main container end -->

@include('layouts.frontend.footer')<!-- Footer end -->

@endsection
