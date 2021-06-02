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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
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
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #4682b4; padding:0px">
    <div class="container">
        <table width="500px" height="0px" style="padding:0px">
        <tr style="padding:0px" >
            <th style="padding:0px">
            <a class="navbar-brand" href="{{ url('/index') }}"><img src="{{ asset('image\logo\yayasan_soposurung_logo.png') }}" width="80" height="80" class="d-inline-block align-top" alt="">
            </th>

            <th style="padding:0px">
            <p style="color:white; font-family:Poppins-Regular; font-size:25px"><strong>  Yayasan Tunas Bangsa Soposurung </strong></p>
            </th>
    </tr>

    </table>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/asrama/informasi') }}">Tentang Asrama</a>
                    
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fasilitas</a>
                    
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kegiatan</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/kegiatan/rutinitas') }}">Rutinitas</a>
                        <a class="dropdown-item" href="{{ url('/kegiatan/ekstrakurikuler') }}">Extrakurikuler</a>
                        <a class="dropdown-item" href="{{ url('/kegiatan/minatbakat') }}">Minat-Bakat</a>
                        <a class="dropdown-item" href="{{ url('/kegiatan/lainnya') }}">Non-Akademik</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kesiswaan</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/kesiswaan/organisasi_siswa') }}">Organisasi Siswa</a>
                        <a class="dropdown-item" href="{{ url('/kesiswaan/daftar_prestasi') }}">Data Prestasi</a>
                        <a class="dropdown-item" href="{{ url('/kesiswaan/alumni/semuaAngkatan') }}">Tentang Alumni</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('http://spsb.yasop.id/')  }}">Penerimaan Siswa</a>
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
  <div class="footer" style="background-color: #4682b4;">
  <div class="container">
                        <div class="title">
                            <br>
                            <h4 style="text-align:center;color:white">Yayasan Tunas Bangsa Soposurung</h4> <br> 
                        </div>
                        <table style="width:100%">
                            <tr>

                            <th>
                            
                            <h5 style="text-align:left;color:white">Situs terkait : </p>
                            <a href="{{ URL::to('https://www.facebook.com/AsramaYayasanSoposurung/') }}" style="color:white; font-size:15px"><img style="height:40px; weight:40px; margin-bottom:10px;border-radius: 30%;" src="{{ asset('image/logo/Facebook.png') }}"> Facebook</a><br/>
              <a href="{{ URL::to('http://www.tbsilalahicenter.com/') }}" style="color:white; font-size:15px"><img style="height:40px; weight:40px; margin-bottom:10px; background:white;border-radius: 30%;" src="{{ asset('image/logo/Logo-TBSC-01.png') }}"> TB Silalahi Center</a>
                            
                            </th>
                                <th>
                                    <h5 style="text-align:left;color:white"><i class="fas fa-map-marker-alt"></i>  Alamat :<br> Jl. Dr. Adrianus Sinaga No.1, Soposurung, <br>Balige, Hinalang Bagasan, Balige, <br>Kabupaten Toba Samosir, Sumatera Utara 22312</h5> <br>
                                    <h5 style="text-align:left;color:white"><i class="fas fa-envelope-square"></i> Email :<br>spsb@yasop.id</h5>
                                </th>
                                <th>
                                    <h5 style="text-align:left;color:white"><i class="fas fa-phone-volume"></i>  Telp/Fax:<br> (0632)-21496 (Senin - Sabtu, 08.00 - 17.00 WIB)</h5> <br>
                                    <h5 style="text-align:left;color:white"><i class="fab fa-whatsapp"></i>   HP/WA:<br> 0811-6320-025 (Senin - Sabtu, 08.00 - 17.00 WIB)</h5>
                                </th> 
                            </tr>
                       
                    
                </div>
    <div class="container">
      <!-- <p class="m-0 text-center text-white">Copyright &copy; 2019 Yayasan Soposurung Balige. All right reserved</p> -->
      <div class="row">
          
          <div class="col-md-6">
              <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-8">
                    <style>
                        table, th, td {
                        padding: 15px;
                        border: 0px solid black;
                        vertical-align: top;

                        
                    }
                   
                    
                    </style>
                     
                  </div>
                
              </div>
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
