@extends('layouts_blog.layout')

<div class="content">


<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
    <img src="https://store-images.s-microsoft.com/image/apps.26620.13682773009232620.62a18cea-40b3-43f1-811b-46ef9d15331b.96a2c700-d04f-4128-b94c-596de2c4cc83?mode=scale&q=90&h=1080&w=1920" style="width:100%; max-height:450px">
    <div class="text">Enam Siswa Yasop Raih Medali KSN</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
    <img src="https://wallpapercave.com/wp/wp2904877.jpg" style="width:100%; height:450px">
    <div class="text">Enam Siswa Yasop Raih Medali KSN</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="https://store-images.s-microsoft.com/image/apps.26620.13682773009232620.62a18cea-40b3-43f1-811b-46ef9d15331b.96a2c700-d04f-4128-b94c-596de2c4cc83?mode=scale&q=90&h=1080&w=1920" style="width:100%; height:450px">
    <div class="text">Enam Siswa Yasop Raih Medali KSN</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>



<div class="kata-sambutan">

<table  style="width:100%;margin-left: auto;
  margin-right: auto;">
<tr>

<th style="vertical-align: middle">
<img style="max-width:250px" src="{{$kontenKataSambutan['gambar']}}"/>
</th>

<th style="vertical-align: middle"> 
{{$kontenKataSambutan['judul']}} <br><br>
<p style="color:black">"{{$kontenKataSambutan['konten']}} "
</p>
   <p>{{$kontenKataSambutan['sumber']}} </p>
  </th>

</tr>
</table>

</div>
<br>
<table  style="width:90%;margin-left: auto;
  margin-right: auto;">
  <tr>
    <th  style="padding: 3px; width:80%">
              <div class="kegiatan">
              <h2> &nbsp; Kegiatan Terbaru </h2> 
              
          <!--Carousel Wrapper-->
          <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

          <!--Slides-->
          <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">


            
        @if (count($listKegiatan) > 0)
          @foreach ($listKegiatan as $kegiatan)
              <div class="col-md-3" style="float:left">
              <div class="card mb-2">
                  <img class="card-img-top"
                    src="{{$kegiatan['gambar']}}" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">{{$kegiatan['judul_artikel']}}</h4>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($kegiatan['konten'], 50,'...')}}</p><br>
                    <a class="btn btn-primary"><p style="color:white">Selengkapnya</p></a>
                  </div>
                </div>
              </div>

          @endforeach
        @else
          <div class="col-md-3" style="float:left">
              <div class="card mb-2">
                  <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">--</h4>
                    <p class="card-text">--</p><br>
                    <a class="btn btn-primary"><p style="color:white">Selengkapnya</p></a>
                  </div>
                </div>
              </div>
          @endif


            </div>
            <!--/.First slide-->

            <!--/.Second slide-->

          

          </div>
          <!--/.Slides-->
            </div>
    
    </th>
    
    
    <th style="padding: 5px;">
    
    

  <div class="agenda">
    <h2> &nbsp; Agenda</h2>
    
    @if (count($listAgenda) > 0)
      @foreach ($listAgenda as $agenda)
          <div class="column" style="padding:0px">

            <div class="card-agenda">
              
                <table style="width:100%; ">
                  <tr >
                    <th  style="background-color:#D3E0CA"><h3 style="text-align:center">{{explode(" ",$agenda->tanggal)[0]}}</h3>
                    <p style="text-align:center">{{explode(" ",$agenda->tanggal)[1]}} {{explode(" ",$agenda->tanggal)[2]}}</p> 
                    
                    <th  style="background-color:black; padding:0px"> </th>
                  </th>
                    <th><h6><strong>{{$agenda->judul_agenda}}</strong></h6></th> 
                </tr>
                </table>
            </div>
          @endforeach
          @else
            <div class="column" style="padding:0px">

                <div class="card-agenda">
                  
                    <table style="width:100%; ">
                      <tr >
                        <th  style="background-color:#D3E0CA"><h3></h3>
                        <p></p> 
                        
                        <th  style="background-color:black; padding:0px"> </th>
                      </th>
                        <th><h6><strong>Tidak ada agenda</strong></h6></th> 
                    </tr>
                    </table>
                </div>

    @endif

    </th> 
  </tr>
  
  <tr>
    <th style="text-align:center;">
    <a  class="btn btn-primary"><p style="color:white">Lihat semua kegiatan</p></a>
</th>
  
</tr>
</table>

	</div>
	
  </div>
  

<br><br>
<div class="artikel">
  <h2> Informasi & Artikel</h2>
  
  <table  style="width:90%;margin-left: auto;
  margin-right: auto; height:200px;">
  <tr style="height:400px;">
    

    <div class="row row-cols-1 row-cols-md-2">
        
  @if (count($listArtikel)> 0)
      @foreach ($listArtikel as $artikel)
    <th  style="padding: 0px; width:25%">
      <div class="col">
        <div class="card" style="border-radius:20px; max-width:300px">
          <img
            src="{{$artikel['gambar']}}"
            class="card-img-top"
            alt="..."
            style="border-radius:20px"
          />

          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold;">{{$artikel['judul_artikel']}}</h5>
            <p class="card-text">
              {{$artikel['kategori']}} | {{$artikel['tanggal_dibuat']}}
            </p>
          </div>
        </div>
      </div>
    </th>
    
    @endforeach

      
      @else


      @endif

    

    </tr>
    
      
  </div>

    </table>



  <table style="width:100%">
  <tr>
    <th style="text-align:center;">
    <a  class="btn btn-primary"><p style="color:white">Lihat semua informasi dan artikel</p></a>
</th>
  
</tr>
</table>

<h2> Testimoni Alumni</h2>


<div class="sliderz">

  
            <div class="slidez">



            @if (count($listAgenda) > 0)
                  @foreach ($listAlumni as $alumni)

                          <div id="slidez-{{ $loop->iteration }}">

                                  <table style="width:100%">
                                <tr>
                                  <th style="text-align:center;">
                                  <img
                                          src="{{$alumni->gambar}}"
                                          
                                          alt="..."
                                          style="max-width: 200px"
                                          
                                        />
                                </th>

                                <th style="vertical-align: middle"> 

                                "{{$alumni->kutipan}}"

                                <p> {{$alumni->nama_alumni}} ({{$alumni->detil_kampus}}) </p>
                                </th>
                                
                              </tr>
                              </table>
                
                        </div>

@endforeach
@endif
  </div>
  @foreach ($listAlumni as $alumni)
      <a href="#slidez-{{ $loop->iteration }}">{{ $loop->iteration }}</a>
  @endforeach

</div>





<style>
*,
*:before,
*:after {
	box-sizing: border-box;
}



.sliderz {
  width: 100%;
  text-align: center;
  overflow: hidden;
}

.slidez {
  display: flex;
  
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  
  
  
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
  
  /*
  scroll-snap-points-x: repeat(300px);
  scroll-snap-type: mandatory;
  */
}
.slidez::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}
.slidez::-webkit-scrollbar-thumb {
  background: black;
  border-radius: 10px;
}
.slidez::-webkit-scrollbar-track {
  background: transparent;
}
.slidez > div {
  scroll-snap-align: start;
  flex-shrink: 0;
  width: 800px;
  height: 300px;
  margin-right: 50px;
  border-radius: 10px;
  background: white;
  transform-origin: center center;
  transform: scale(1);
  transition: transform 0.5s;
  position: relative;
  
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 100px;
}
.slidez > div:target {
/*   transform: scale(0.8); */
}
.author-info {
  background: rgba(0, 0, 0, 0.75);
  color: white;
  padding: 0.75rem;
  text-align: center;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  margin: 0;
}
.author-info a {
  color: white;
}


.sliderz > a {
  display: inline-flex;
  width: 1.5rem;
  height: 1.5rem;
  background: white;
  text-decoration: none;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  margin: 0 0 0.5rem 0;
  position: relative;
}
.sliderz > a:active {
  top: 1px;
}
.sliderz > a:focus {
  background: #000;
}








.card-agenda {
	background-color: white;
	border-radius: 5px;
	color: black;
	margin: 5px 5px 0 5px;
	padding: 5px;
	overflow: hidden;
  border-radius:10px;
}

.card-agenda:hover {
	background-color: #F1FAFF;
	height: auto;
	overflow: visible;
}


.line-one{
  
  background-color: blue;
  margin: 0 auto;
  height : 300px;
}



.kata-sambutan {
  background-color: #F1FAFF;
  width:90%;
  margin: 0 auto;
  
}

.kegiatan {
  height: 30%;
  background-color: #F1FAFF;
  
}


.agenda {
 
  background-color: white;
  border-radius:5px;
}

.artikel {
  height: 900px;
  width : 90%;
  background-color: #f8fafc;
  margin: 0 auto;
  
}

.testi-alumni {
  height: 900px;
  width : 90%;
  background-color: #f8fafc;
  margin: 0 auto;
  
}

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 30%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.5s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: #FFFFED;
}

/* Caption text */
.text {
  color: black;
  font-size: 24px;
  font-weight: bold;
  position: absolute; 
  top: 400px; 
  background-color:white
  
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px ;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 5s;
  animation-name: fade;
  animation-duration: 5s;
}

@-webkit-keyframes fade {
  from {opacity: .1}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .9}
  to {opacity: 1}
}
</style>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

</div>
