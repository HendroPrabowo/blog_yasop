<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" type="image/png" href="{{ asset('image/logo/yayasan_soposurung_logo.png') }}"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yayasan Soposurung</title>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <style media="screen">
        a.nav-link, a.navbar-brand{
            color: white;
        }
        a.nav-link:hover, a.navbar-brand:hover {
            color: yellow;
        }
    </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #660000">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('image\logo\yayasan_soposurung_logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">  Yayasan Soposurung</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Asrama</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/tentang_asrama/visimisi">Visi Misi</a>
                        <a class="dropdown-item" href="/tentang_asrama/sejarah">Sejarah</a>
                        <a class="dropdown-item" href="/tentang_asrama/pendiri">Pendiri</a>
                        <a class="dropdown-item" href="/tentang_asrama/lokasi">Lokasi</a>
                        <a class="dropdown-item" href="/tentang_asrama/kontak">Kontak</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pamong</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pamong/kepala_asrama">Kepala Asrama</a>
                        <a class="dropdown-item" href="/pamong/staf_pengajar">Staf Pengajar (Guru)</a>
                        <a class="dropdown-item" href="/pamong/staf_pembina">Staf Pembina</a>
                        <a class="dropdown-item" href="/pamong/staf_pendukung">Staf Pendukung</a>
                        <a class="dropdown-item" href="/pamong/struktur_organisasi">Struktur Organisasi</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fasilitas</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/fasilitas/akomodasi">Akomodasi</a>
                        <a class="dropdown-item" href="/fasilitas/belajar">Belajar</a>
                        <a class="dropdown-item" href="/fasilitas/praktikum">Praktikum</a>
                        <a class="dropdown-item" href="/fasilitas/kesehatan">Kesehatan</a>
                        <a class="dropdown-item" href="/fasilitas/it">IT</a>
                        <a class="dropdown-item" href="/fasilitas/olahraga">Olahraga</a>
                        <a class="dropdown-item" href="/fasilitas/sosial">Sosial</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kegiatan</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/kegiatan/rutinitas">Rutinias</a>
                        <a class="dropdown-item" href="/kegiatan/ekstrakurikuler">Extrakurikuler</a>
                        <a class="dropdown-item" href="/kegiatan/minatbakat">Minta-Bakat</a>
                        <a class="dropdown-item" href="/kegiatan/lainnya">Lainnya</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kesiswaan</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/kesiswaan/organisasi_siswa">Organisasi Siswa</a>
                        <a class="dropdown-item" href="/kesiswaan/daftar_siswa">Daftar Siswa</a>
                        <a class="dropdown-item" href="/kesiswaan/daftar_prestasi">Data Prestasi</a>
                        <a class="dropdown-item" href="/kesiswaan/blog_siswa">Blog Siswa</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Penerimaan Siswa</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
      @yield('isi')
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-4" style="background-color: #660000">
    <div class="container">
      <!-- <p class="m-0 text-center text-white">Copyright &copy; 2019 Yayasan Soposurung Balige. All right reserved</p> -->
      <div class="row">
          <div class="col-md-3">

          </div>
          <div class="col-md-6">
              <p class="m-0 text-center text-white">Copyright &copy; 2019 Yayasan Soposurung Balige. All right reserved</p>
              <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <table class="table">
                          <tr>
                              <td width="10%"><img src="{{ asset('image/logo/logo_blog.png') }}" alt=""></td>
                              <td class="text-white">
                                  <h4><b>Yayasan Soposorung</b></h4>
                                  Jl. Dr. Adrianus Sinaga<br>
                                  Soposurung - Balige<br>
                                  Kabupaten Toba Samosir 22312<br>
                                  Telp/Fax. (0632) 21496
                              </td>
                          </tr>
                      </table>
                  </div>
                  <div class="col-md-2"> </div>
              </div>
          </div>
          <div class="col-md-3">
              <p class="text-white">Designed By : Hendro Prabowo</p>
          </div>
      </div>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>
