<div class="site-navigation">
    <div class="container">
        {{-- <div class="row">
          <div class="col-lg-12">

              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
              </div><!-- logo end -->
                  <div id="navbar-collapse" class="collapse navbar-collapse" style="">
                      <ul class="nav navbar-nav mr-auto" >
                          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li class="dropdown-submenu">
                                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Pemerintah Kota <br>   </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="{{ route('contents_kategori', 'profil-kota  ') }}">Profil  </a></li>
                                    <li><a href="{{ route('menu.sejarah. ') }}">Sejarah  </a></li>
                                    <li><a href="{{ route('menu.geografis. ') }}">Letak Geografis  </a></li>
                                    <li><a href="{{ route('menu.profilepemerintah. ') }}">Profil Pemerintah  </a></li>
                                    <li><a href="{{ route('menu.profilepejabat. ') }}">Profil Pejabat Daerah</a></li>
                                    <li><a href="{{ route('menu.lhkpn. ') }}">LHKPN Pejabat Publik Pemerintah  </a></li>
                                    <li><a href="{{ route('menu.visimisi. ') }}">Visi Misi  </a></li>
                                    <li><a href="{{ route('menu.strukturpemerintah. ') }}">Bagan Struktur Organisasi Pemerintah  </a></li>
                                    <li><a href="{{ route('menu.strukturunitkerja. ') }}">Struktur Organisasi Unit Kerja</a></li>
                                    <li><a href="{{ route('menu.tupoksipemerintah. ') }}">Tupoksi Pemerintah  </a></li>
                                    <li><a href="{{ route('menu.tupoksiunitkerja. ') }}">Tupoksi Unit Kerja</a></li>
                                    <li><a href="{{ route('menu.agenda. ') }}">Agenda Kerja dan Kegiatan Pimpinan Pemerintah  </a></li>
                                  </ul>
                              </li>
                              <li class="dropdown-submenu">
                                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown">PPID   </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="{{ route('menu.profil.ppid') }}">Profil PPID  </a></li>
                                    <li><a href="{{ route('menu.visimisi.ppid') }}">Visi Misi PPID</a></li>
                                    <li><a href="{{ route('menu.struktur.ppid') }}">Bagan Struktur PPID</a></li>
                                    <li><a href="{{ route('menu.sop.ppid') }}">SOP</a></li>
                                    <li><a href="{{ route('menu.tupoksi.ppid') }}">Tupoksi PPID</a></li>
                                    <li><a href="{{ route('menu.sk.ppid') }}">SK PPID</a></li>
                                    <li><a href="{{ route('menu.perwal.ppid') }}">Perwal PPID</a></li>
                                    <li><a href="{{ route('menu.maklumat.ppid') }}">Maklumat PPID</a></li>
                                    <li><a href="{{ route('menu.jampelayanan.ppid') }}">Jam Pelayanan</a></li>
                                    <li><a href="{{ route('menu.informasipublik.ppid') }}">SK Daftar Informasi Publik</a></li>
                                    <li><a href="{{ route('menu.informasidikecualikan.ppid') }}">SK Daftar Informasi yang Dikecualikan</a></li>
                                  </ul>
                              </li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('menu.ppid.pelaksana') }}">Data Profil</a></li>


                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Informasi Publik <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li class="dropdown-submenu">
                                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Daftar Informasi <br> Publik </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="{{ route('informasi.publik') }}">Daftar Informasi Publik 2022</a></li>
                                    <li><a href="{{ route('informasi.ppid') }}">Daftar Informasi Publik PPID Pelaksana</a></li>
                                  </ul>
                              </li>
                              <li><a href="{{ route('informasi.berkala') }}">Informasi Secara Berkala</a></li>
                              <li><a href="{{ route('informasi.sertamerta') }}">Informasi Serta Merta</a></li>
                              <li><a href="{{ route('informasi.setiapsaat') }}">Informasi Setiap Saat</a></li>
                              <li><a href="{{ route('informasi.dikecualikan') }}">Informasi Dikecualikan Penetapan dan Proses Uji Konsekuensi</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                           <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Download <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ route('contents_kategori', 'pengumuman') }}">Pengumuman</a></li>
                          <li><a href="{{ route('contents_kategori', 'produk-hukum') }}">Produk Hukum</a></li>
                            <li class="dropdown-submenu">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">SOP</a>
                                <ul class="dropdown-menu">
                                  <li><a href="{{ route('sop.organisasi') }}">SOP Pedoman Pengelolaan Organisasi</a></li>
                                  <li><a href="{{ route('sop.administrasi') }}">SOP Pedoman Pengelolaan Administrasi</a></li>
                                  <li><a href="{{ route('sop.kepegawaian') }}">SOP Pedoman Pengelolaan Kepegawaian</a></li>
                                  <li><a href="{{ route('sop.keuangan') }}">SOP Pedoman Pengelolaan Keuangan</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Materi PPID</a>
                              <ul class="dropdown-menu">
                                <li><a href="{{ route('contents_kategori', 'materi-ppid-kota') }}">Materi PPID Kota</a></li>
                                <li><a href="{{ route('contents_kategori', 'materi-umum') }}">Materi Umum</a></li>
                              </ul>
                          </li>
                            <li><a href="{{ route('contents_kategori', 'laporan-pengaduan') }}">Laporan Pengaduan</a></li>
                            <li><a href="{{ route('contents_kategori', 'berita-ppid') }}">Berita PPID</a></li>
                            <li><a href="{{ route('contents_kategori', 'artikel') }}">Artikel</a></li>
                            <li><a href="{{ route('contents_kategori', 'narasi-tunggal') }}">Narasi Tunggal</a></li>
                          </ul>
                      </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Galeri <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ route('contents_kategori', 'galeri') }}">Galeri</a></li>
                              <li><a href="{{ route('contents_kategori', 'infografis') }}">Infografis</a></li>
                            </ul>
                        </li>


                        <li class="nav-item"><a class="nav-link" href="{{ route('daftaragenda') }}">Agenda Kota</a></li>


                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Data Statistik <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="https://dashboard. kota.go.id/" target="_blank">Data Sektoral</a></li>
                              <li><a href="https:// kota.bps.go.id/" target="_blank">BPS  </a></li>
                              <li><a href="">Data Penduduk   Tahun 2019</a></li>
                              <li><a href="https://hargapangan.id/" target="_blank">Tabel Harga Berdasarkan Daerah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://ppid. kota.go.id/" target="_blank">Arsip PPID  </a></li>

                      </ul>
                  </div>
                </nav>

          </div>
          <!--/ Col end -->
        </div> --}}
        <!--/ Row end -->
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                        aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav mr-auto">
                            <li>
                                <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                                    <a class="d-block" href="/">
                                        {{-- <img src="{{asset('backend2/assets/img/Lambang_Kota_ .png')}}" alt="Constra" style="margin-bottom: 10px"> --}}
                                        <img src="{{ asset('frontend/images/ppid2.png') }}" alt="Constra"
                                            style="width:130px; height:50px; margin-bottom: 10px; margin-top: 8px">
                                    </a>




                                </div><!-- logo end -->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

                            {{-- <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li class="dropdown-submenu">
                                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Pemerintah Kota <br>   </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="{{ route('menu.profilkota. ') }}">Profil  </a></li>
                                    <li><a href="{{ route('menu.sejarah. ') }}">Sejarah  </a></li>
                                    <li><a href="{{ route('menu.geografis. ') }}">Letak Geografis  </a></li>
                                    <li><a href="{{ route('menu.profilepemerintah. ') }}">Profil Pemerintah  </a></li>
                                    <li><a href="{{ route('menu.profilepejabat. ') }}">Profil Pejabat Daerah</a></li>
                                    <li><a href="{{ route('menu.lhkpn. ') }}">LHKPN Pejabat Publik Pemerintah  </a></li>
                                    <li><a href="{{ route('menu.visimisi. ') }}">Visi Misi  </a></li>
                                    <li><a href="{{ route('menu.strukturpemerintah. ') }}">Bagan Struktur Organisasi Pemerintah  </a></li>
                                    <li><a href="{{ route('menu.strukturunitkerja. ') }}">Struktur Organisasi Unit Kerja</a></li>
                                    <li><a href="{{ route('menu.tupoksipemerintah. ') }}">Tupoksi Pemerintah  </a></li>
                                    <li><a href="{{ route('menu.tupoksiunitkerja. ') }}">Tupoksi Unit Kerja</a></li>
                                    <li><a href="{{ route('menu.agenda. ') }}">Agenda Kerja dan Kegiatan Pimpinan Pemerintah  </a></li>
                                  </ul>
                              </li>
                              <li class="dropdown-submenu">
                                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown">PPID   </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="{{ route('menu.profil.ppid') }}">Profil PPID  </a></li>
                                    <li><a href="{{ route('menu.visimisi.ppid') }}">Visi Misi PPID</a></li>
                                    <li><a href="{{ route('menu.struktur.ppid') }}">Bagan Struktur PPID</a></li>
                                    <li><a href="{{ route('menu.sop.ppid') }}">SOP</a></li>
                                    <li><a href="{{ route('menu.tupoksi.ppid') }}">Tupoksi PPID</a></li>
                                    <li><a href="{{ route('menu.sk.ppid') }}">SK PPID</a></li>
                                    <li><a href="{{ route('menu.perwal.ppid') }}">Perwal PPID</a></li>
                                    <li><a href="{{ route('menu.maklumat.ppid') }}">Maklumat PPID</a></li>
                                    <li><a href="{{ route('menu.informasidikecualikan.ppid') }}">SK Daftar Informasi yang Dikecualikan</a></li>
                                    <li><a href="{{ route('menu.informasipublik.ppid') }}">SK Daftar Informasi Publik</a></li>
                                    <li><a href="{{ route('menu.jampelayanan.ppid') }}">Jam Pelayanan</a></li>

                                  </ul>
                              </li>
                            </ul>
                        </li> --}}

                            <li class="nav-item"><a class="nav-link" href="{{ route('menu.profilepejabat') }}">Data
                                    Profil</a></li>

                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('menu.maklumat.ppid') }}">Maklumat</a>
                            </li>

                            {{-- <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Informasi
                                    Publik <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    {{-- <li class="dropdown-submenu">
                                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Daftar
                                            Informasi <br> Publik </a>
                                        <ul class="dropdown-menu">

                                            <li><a href="{{ route('informasi.publik2023') }}">Daftar Informasi Publik
                                                    2023</a></li>
                                            <li><a href="{{ route('informasi.ppid') }}">Daftar Informasi Publik PPID
                                                    Pelaksana</a></li>
                                        </ul>
                                    </li> --}}
                            {{-- <li><a href="{{ route('informasi.berkala') }}">Informasi Secara Berkala</a></li>
                            <li><a href="{{ route('informasi.sertamerta') }}">Informasi Serta Merta</a></li>
                            <li><a href="{{ route('informasi.setiapsaat') }}">Informasi Setiap Saat</a></li>
                            <li><a href="{{ route('informasi.dikecualikan') }}">Informasi Dikecualikan </a></li>
                        </ul>
                        </li> --}}

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Informasi
                                    Publik<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('contents_kategori', 'berkala') }}">Informasi Berkala</a></li>
                                    <li><a href="{{ route('contents_kategori', 'serta-merta') }}">Informasi Serta
                                            Merta</a>
                                    </li>
                                    <li><a href="{{ route('contents_kategori', 'setiap-saat') }}">Informasi Setiap
                                            Saat</a></li>

                                    <li><a href="{{ route('contents_kategori', 'dikecualikan') }}">Informasi
                                            dikecualikan</a></li>


                                </ul>
                            </li>



                            {{-- <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Galeri <i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('contents_kategori', 'galeri') }}">Galeri</a></li>
                                    <li><a href="{{ route('contents_kategori', 'infografis') }}">Infografis</a></li>
                                </ul>
                            </li> --}}




                            {{-- <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Data Statistik
                                    <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="https://dashboard. kota.go.id/" target="_blank">Data Sektoral</a>
                                    </li>
                                    <li><a href="https:// kota.bps.go.id/" target="_blank">BPS  </a></li>
                                    <li><a href="https://profilpenduduk. kota.go.id/rekap-data-kependudukan"
                                            target="_blank">Data Penduduk   Tahun 2021</a></li>
                                    <li><a href="https://hargapangan.id/" target="_blank">Tabel Harga Berdasarkan
                                            Daerah</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item"><a class="nav-link" href="https://arsip-ppid. kota.go.id/"
                                    target="_blank">Arsip PPID Kota  </a></li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                        <ul class="list-unstyled">
                            <li>
                                <a title="Facebook"
                                    href="https://m.facebook.com/story.php?story_fbid=pfbid035iwvbsnivgKkKMsr2uvA8KMoU2YkD7KCct6Sc8J79ZzhhQdsdUN4E2v2LpKMGutCl&id=100042757785205&mibextid=Nif5oz"
                                    target="_blank">
                                    <span class="social-icon text-white"><i class="fab fa-facebook-f"></i></span>
                                </a>

                                <a title="Instagram"
                                    href="https://www.instagram.com/p/CstQ6cpJTb6/?igshid=MTc4MmM1YmI2Ng=="
                                    target="_blank">
                                    <span class="social-icon text-white"><i class="fab fa-instagram"></i></span>
                                </a>
                                <a title="Youtube" href="{{ url('https://www.youtube.com/@kopitalas') }}"
                                    target="_blank">
                                    <span class="social-icon text-white"><i class="fab fa-youtube"></i></span>
                                </a>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--/ Col end -->
        </div>
        {{-- <div class="nav-search" style="">
            <span id="search" class="text-white"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
            <form action="{{ route('reader.search.berita') }}" method="POST" class="mt-3" style="margin-left:20px;">
                @csrf
                <label for="search-field" class="w-100 mb-0">
                    <input type="text" value="{{ old('cari') }}" name="cari" class="form-control"
                        placeholder="Temukan informasi">
                </label>
                <span class="search-close">&times;</span>
        </div><!-- Site search end --> --}}
        </form>
    </div>
    <!--/ Container end -->

</div>
