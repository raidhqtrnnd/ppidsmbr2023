<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard-admin-ppid">PPID SATPOL PP SUMBAR</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard-admin-ppid">PPID</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->is('dashboard-admin-ppid') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard-admin-ppid"><i
                        class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Profil</li>
            <li
                class="nav-item dropdown {{ request()->is(
                    'profile/kota  ',
                    'profile/sejarah',
                    'profile/letak-geografis',
                    'profile/profil-pemerintah',
                    'profile/profil-pejabat',
                    'profile/lhkpn-pejabat',
                    'profile/visi-misi',
                    'profile/struktur-pemerintah',
                    'profile/struktur-unit-kerja',
                    'profile/tupoksi-pemerintah',
                    'profile/tupoksi-unit-kerja',
                    'profile/agenda-kerja-kegiatan-pimpinan',
                )
                    ? 'active'
                    : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-globe"></i>
                    <span>Pemerintah</span></a>
                <ul class="dropdown-menu">
                    {{-- <li class="{{ request()->is('profile/kota  ') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route(' profile.index') }}">Profil  </a></li>
                    <li class="{{ request()->is('profile/sejarah') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('sejarah.index') }}">Sejarah  </a></li>
                    <li class="{{ request()->is('profile/letak-geografis') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('geografis.index') }}">Letak Geografis</a></li>
                    <li class="{{ request()->is('profile/profil-pemerintah') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('profil.pemerintah.index') }}">Profil Pemerintah</a></li> --}}
                    <li class="{{ request()->is('profile/profil-pejabat') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('profil.pejabat.index') }}">Profil</a></li>
                    {{-- <li class="{{ request()->is('profile/lhkpn-pejabat') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('lhkpn.index') }}">LHKPN Pejabat Publik</a></li>
                    <li class="{{ request()->is('profile/visi-misi') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('visimisi.index') }}">Visi Misi  </a></li> --}}
                    {{-- <li
                        class="nav-item dropdown {{ request()->is('profile/struktur-pemerintah', 'profile/struktur-unit-kerja') ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown"><span>Struktur Organisasi</span></a>
                        <ul class="dropdown-menu">
                            <li class="{{ request()->is('profile/struktur-pemerintah') ? 'active' : '' }}"><a
                                    class="nav-link" href="{{ route('struktur.pemerintah.index') }}">Organisasi
                                    Pemerintah</a></li>
                            <li class="{{ request()->is('profile/struktur-unit-kerja') ? 'active' : '' }}"><a
                                    class="nav-link" href="{{ route('struktur.unitkerja.index') }}">Organisasi Unit
                                    Kerja</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li
                        class="nav-item dropdown {{ request()->is('profile/tupoksi-pemerintah', 'profile/tupoksi-unit-kerja') ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><span>Tupoksi</span></a>
                        <ul class="dropdown-menu">
                            <li class="{{ request()->is('profile/tupoksi-pemerintah') ? 'active' : '' }}"><a
                                    class="nav-link" href="{{ route('tupoksi.pemerintah.index') }}">Pemerintah</a></li>
                            <li class="{{ request()->is('profile/tupoksi-unit-kerja') ? 'active' : '' }}"><a
                                    class="nav-link" href="{{ route('tupoksi.unitkerja.index') }}">Unit Kerja</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('profile/agenda-kerja-kegiatan-pimpinan') ? 'active' : '' }}"><a
                            class="nav-link" style="margin-top:10px;" href="{{ route('agenda.index') }}">Agenda Kerja &
                            Kegiatan Pimpinan</a></li> --}}
                </ul>
            </li>

            <li
                class="nav-item dropdown {{ request()->is(
                    'profile/ppid',
                    'profile/visi-misi-ppid',
                    'profile/bagan-struktur-ppid',
                    'profile/sop-ppid',
                    'profile/tupoksi-ppid',
                    'profile/sk-ppid',
                    'profile/perwal-ppid',
                    'profile/maklumat-ppid',
                    'profile/jam-pelayanan',
                    'profile/sk-daftar-informasi-publik',
                    'profile/sk-daftar-informasi-dikecualikan',
                    'profile/agenda-kerja-kegiatan-pimpinan',
                    'ppidpelaksana',
                )
                    ? 'active'
                    : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-alt"></i>
                    <span>PPID</span></a>
                <ul class="dropdown-menu">
                    {{-- <li class="{{ request()->is('profile/ppid') ? 'active' : '' }}"><a class="nav-link"
                            href="/profile/ppid">Profil PPID</a></li>
                    <li class="{{ request()->is('profile/visi-misi-ppid') ? 'active' : '' }}"><a class="nav-link"
                            href="/profile/visi-misi-ppid">Visi Misi PPID</a></li>
                    <li class="{{ request()->is('profile/bagan-struktur-ppid') ? 'active' : '' }}"><a class="nav-link"
                            href="/profile/bagan-struktur-ppid">Bagan Struktur</a></li>
                    <li class="{{ request()->is('profile/sop-ppid') ? 'active' : '' }}"><a class="nav-link"
                            href="/profile/sop-ppid">SOP</a></li>
                    <li class="{{ request()->is('profile/tupoksi-ppid') ? 'active' : '' }}"><a class="nav-link"
                            href="/profile/tupoksi-ppid">Tupoksi</a></li>
                    <li class="{{ request()->is('profile/sk-ppid') ? 'active' : '' }}"><a class="nav-link"
                            href="/profile/sk-ppid">SK PPID</a></li>
                    <li class="{{ request()->is('profile/perwal-ppid') ? 'active' : '' }}"><a class="nav-link"
                            href="/profile/perwal-ppid">Perwal</a></li> --}}
                    <li class="{{ request()->is('profile/maklumat-ppid') ? 'active' : '' }}"><a class="nav-link"
                            href="/profile/maklumat-ppid">Maklumat</a></li>
                    {{-- <li class="{{ request()->is('profile/jam-pelayanan') ? 'active' : '' }}"><a class="nav-link"
                            href="/profile/jam-pelayanan">Jam Pelayanan</a></li>
                    <li class="{{ request()->is('profile/sk-daftar-informasi-publik') ? 'active' : '' }}"><a
                            class="nav-link" href="/profile/sk-daftar-informasi-publik">SK Daftar Informasi Publik</a>
                    </li>
                    <li class="{{ request()->is('profile/sk-daftar-informasi-dikecualikan') ? 'active' : '' }}"><a
                            class="nav-link" href="/profile/sk-daftar-informasi-dikecualikan">SK Daftar
                            Dikecualikan</a></li>
                    <li class="{{ request()->is('ppidpelaksana') ? 'active' : '' }}"><a class="nav-link"
                            href="/ppidpelaksana">PPID Pelaksana</a></li> --}}
                </ul>
            </li>
            {{-- <li class="{{ request()->is('profile/transparansi-anggaran-kota  ') ? 'active' : '' }}"><a
                    class="nav-link" href="{{ route('transparansi.index') }}"><i class="fas fa-bullhorn"></i>
                    <span>Transparansi Anggaran</span></a></li> --}}

            {{-- <li class="menu-header">Informasi Publik</li>
            <li
                class="nav-item dropdown {{ request()->is('informasi/daftar-informasi-publik-2022', 'informasi/daftar-informasi-publik-ppid-pelaksana')
                    ? 'active'
                    : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-file"></i>
                    <span>Daftar Informasi Publik</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('informasi/daftar-informasi-publik-2022') ? 'active' : '' }}"><a
                            class="nav-link" href="/informasi/daftar-informasi-publik-2022">Informasi Publik 2022</a>
                    </li>
                    <li class="{{ request()->is('informasi/daftar-informasi-publik-2023') ? 'active' : '' }}"><a
                            class="nav-link" href="/informasi/daftar-informasi-publik-2023">Informasi Publik 2023</a>
                    </li>
                    <li class="{{ request()->is('informasi/daftar-informasi-publik-ppid-pelaksana') ? 'active' : '' }}">
                        <a class="nav-link" href="/informasi/daftar-informasi-publik-ppid-pelaksana">Informasi Publik
                            PPID</a>
                    </li>
                </ul>
            </li>
            <li class="{{ request()->is('informasi/informasi-secara-berkala') ? 'active' : '' }}"><a class="nav-link"
                    href="/informasi/informasi-secara-berkala"><i class="far fa-calendar-alt"></i>
                    <span>Informasi Secara Berkala</span></a></li>
            <li class="{{ request()->is('informasi/informasi-serta-merta') ? 'active' : '' }}"><a class="nav-link"
                    href="/informasi/informasi-serta-merta"><i class="far fa-file"></i> <span>Informasi Serta
                        Merta</span></a></li>
            <li class="{{ request()->is('informasi/informasi-setiap-saat') ? 'active' : '' }}"><a class="nav-link"
                    href="/informasi/informasi-setiap-saat"><i class="fas fa-clock"></i> <span>Informasi Setiap
                        Saat</span></a></li>
            <li
                class="{{ request()->is('informasi/informasi-dikecualikan-penetapan-dan-proses-uji-konsekuensi') ? 'active' : '' }}">
                <a class="nav-link" href="/informasi/informasi-dikecualikan-penetapan-dan-proses-uji-konsekuensi"><i
                        class="fas fa-clock"></i> <span>Informasi Dikecualikan</span></a>
            </li> --}}

            <li class="menu-header">Dokumen</li>
            <li class="{{ request()->is('categories') ? 'active' : '' }}"><a class="nav-link" href="/categories"><i
                        class="fas fa-columns"></i> <span>Kategori</span></a></li>
            <li class="{{ request()->is('a/tags') ? 'active' : '' }}"><a class="nav-link" href="/a/tags"><i
                        class="fas fa-bookmark"></i> <span>Tag</span></a></li>
            <li class="{{ request()->is('a/post') ? 'active' : '' }}"><a class="nav-link" href="/a/post"><i
                        class="fas fa-folder-open"></i> <span>Semua Informasi</span></a></li>


            <li class="menu-header">Kategori Postingan</li>
            <li class="{{ request()->is('a/berkala') ? 'active' : '' }}"><a class="nav-link" href="/a/berkala"><i
                        class="fas fa-bullhorn"></i> <span>Informasi Berkala</span></a></li>
            <li class="{{ request()->is('a/serta-merta') ? 'active' : '' }}"><a class="nav-link"
                    href="/a/serta-merta"><i class="fas fa-ribbon"></i> <span>Informasi Serta Merta</span></a></li>
            <li class="{{ request()->is('a/setiap-saat') ? 'active' : '' }}"><a class="nav-link"
                    href="/a/setiap-saat"><i class="fas fa-headset"></i> <span>Informasi Setiap Saat</span></a></li>
            <li class="{{ request()->is('a/dikecualikan') ? 'active' : '' }}"><a class="nav-link"
                    href="/a/dikecualikan"><i class="fas fa-newspaper"></i> <span>Informasi dikecualikan</span></a>
            </li>

            {{-- <li
                class="nav-item dropdown {{ request()->is(
                    'informasi/sop-pedoman-pengelolaan-organisasi',
                    'informasi/sop-pedoman-pengelolaan-administrasi',
                    'informasi/sop-pedoman-pengelolaan-kepegawaian',
                    'informasi/sop-pedoman-pengelolaan-keuangan',
                )
                    ? 'active'
                    : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i>
                    <span>SOP</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('informasi/sop-pedoman-pengelolaan-organisasi') ? 'active' : '' }}">
                        <a class="nav-link" href="/informasi/sop-pedoman-pengelolaan-organisasi">Pengelolaan
                            Organisasi</a>
                    </li>
                    <li class="{{ request()->is('informasi/sop-pedoman-pengelolaan-administrasi') ? 'active' : '' }}">
                        <a class="nav-link" href="/informasi/sop-pedoman-pengelolaan-administrasi">Pengelolaan
                            Administrasi</a>
                    </li>
                    <li class="{{ request()->is('informasi/sop-pedoman-pengelolaan-kepegawaian') ? 'active' : '' }}">
                        <a class="nav-link" href="/informasi/sop-pedoman-pengelolaan-kepegawaian">Pengelolaan
                            Kepegawaian</a>
                    </li>
                    <li class="{{ request()->is('informasi/sop-pedoman-pengelolaan-keuangan') ? 'active' : '' }}"><a
                            class="nav-link" href="/informasi/sop-pedoman-pengelolaan-keuangan">Pengelolaan
                            Keuangan</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ request()->is('a/materi-ppid-kota', 'a/materi-umum') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-envelope"></i>
                    <span>Materi PPID</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('a/materi-ppid-kota') ? 'active' : '' }}"><a class="nav-link"
                            href="/a/materi-ppid-kota">Materi PPID Kota</a></li>
                    <li class="{{ request()->is('a/materi-umum') ? 'active' : '' }}"><a class="nav-link"
                            href="/a/materi-umum">Materi Umum</a></li>
                </ul>
            </li> --}}
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">

        </div>
    </aside>
</div>
