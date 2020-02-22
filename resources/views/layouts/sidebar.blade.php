<aside id="left-panel" class="left-panel">
   <nav class="navbar navbar-expand-sm navbar-default">

       <div id="main-menu" class="main-menu collapse navbar-collapse">
           <ul class="nav navbar-nav">
               <li>
                   <a href="{{ route('admin') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
               </li>

               <!-- SIDEBAR MENU -->
               <li class="menu-title">Admin Blog</li>
               <li class="menu-item-has-children active dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Posting</a>
                   <ul class="sub-menu children dropdown-menu">
                       <li><i class="fa fa-file"></i><a href="{{ url('/post') }}">Semua Posting</a></li>
                       <li><i class="fa fa-file"></i><a href="{{ url('/carousel') }}">Carousel</a></li>
                       <!-- <li><i class="fa fa-puzzle-piece"></i><a href="#">Tambah Posting</a></li> -->
                   </ul>
               </li>

               <li class="menu-item-has-children active dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i>Kategori</a>
                   <ul class="sub-menu children dropdown-menu">
                       <li><i class="fa fa-bookmark"></i><a href="{{ url('/kategori') }}">Semua Kategori</a></li>
                   </ul>
               </li>

               <li class="menu-title">Halaman Blog</li>
               <li class="menu-item-has-children active dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>Tentang Asrama</a>
                   <ul class="sub-menu children dropdown-menu">
                       <li><i class="fa fa-flag-checkered"></i><a href="{{ url('/visimisi') }}">Visi Misi</a></li>
                       <li><i class="fa fa-book"></i><a href="{{ url('/sejarah') }}">Sejarah</a></li>
                       <li><i class="fa fa-group"></i><a href="{{ url('/pendiri') }}">Pendiri</a></li>
                       <li><i class="fa fa-globe"></i><a href="{{ url('/lokasi') }}">Lokasi</a></li>
                       <li><i class="fa fa-phone"></i><a href="{{ url('/kontak') }}">Kontak</a></li>
                   </ul>
               </li>
               <li class="menu-item-has-children active dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Pamong</a>
                   <ul class="sub-menu children dropdown-menu">
                       <li><i class="fa fa-user"></i><a href="{{ url('/kepala_asrama') }}">Kepala Asrama</a></li>
                       <li><i class="fa fa-users"></i><a href="{{ url('/staf_pengajar') }}">Staf Pengajar (Guru)</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/staf_pembina') }}">Staf Pembina</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/staf_pendukung') }}">Staf Pendukung</a></li>
                       <li><i class="fa fa-bars"></i><a href="{{ url('/struktur_organisasi') }}">Struktur Organisasi</a></li>
                   </ul>
               </li>
               <li class="menu-item-has-children active dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Fasilitas</a>
                   <ul class="sub-menu children dropdown-menu">
                       <li><i class="fa fa-user"></i><a href="{{ url('/akomodasi') }}">Akomodasi</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/belajar') }}">Belajar</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/praktikum') }}">Praktikum</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/kesehatan') }}">Kesehatan</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/it') }}">IT</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/olahraga') }}">Olahraga</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/sosial') }}">Sosial</a></li>
                   </ul>
               </li>
               <li class="menu-item-has-children active dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Kegiatan</a>
                   <ul class="sub-menu children dropdown-menu">
                       <li><i class="fa fa-user"></i><a href="{{ url('/rutinitas') }}">Rutinitas</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/minatbakat') }}">Minat Bakat</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/lainnya') }}">Lainnya</a></li>
                   </ul>
               </li>
               <li class="menu-item-has-children active dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Kesiswaan</a>
                   <ul class="sub-menu children dropdown-menu">
                       <li><i class="fa fa-user"></i><a href="{{ url('/organisasi_siswa') }}">Organisasi Siswa</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/daftar_siswa') }}">Daftar Siswa</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/daftar_prestasi') }}">Daftar Prestasi</a></li>
                       <li><i class="fa fa-user"></i><a href="{{ url('/blog_siswa') }}">Blog Siswa</a></li>
                   </ul>
               </li>
           </ul>
       </div><!-- /.navbar-collapse -->
   </nav>
</aside><!-- /#left-panel -->
