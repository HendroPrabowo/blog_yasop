@extends('layouts_blog.layout')

@section('isi')

<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-bottom: 50px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active gambar-carousel">
      <img class="d-block w-100" src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201907/vivo_s1-770x433.jpeg?eskUcepp9kECpkXaXZLe9t9pd6DmuVSq" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Judul dengan H5</h5>
        <p>Some Text</p>
        <a href="#" class="btn btn-primary">Read More ...</a>
      </div>
    </div>
    <div class="carousel-item gambar-carousel">
      <img class="d-block w-100" src="https://1.bp.blogspot.com/-D-eDaUJagTA/XGHBouQTj9I/AAAAAAAAAZA/Ch4j6qZQP1sKriBv_CBYRLHnC4ZSXAtSgCLcBGAs/s1600/mier-ume-harutyas.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Judul dengan H5</h5>
        <p>Some Text</p>
        <a href="#" class="btn btn-primary">Read More ...</a>
      </div>
    </div>
    <div class="carousel-item gambar-carousel">
      <img class="d-block w-100" src="http://esiveiksmigs.lv/wp-content/uploads/talmaciba.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Judul dengan H5</h5>
        <p>Some Text</p>
        <a href="#" class="btn btn-primary">Read More ...</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="text-center header">
    <h2>All Sample Post</h2>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img-top rounded float-left" src="https://1.bp.blogspot.com/-D-eDaUJagTA/XGHBouQTj9I/AAAAAAAAAZA/Ch4j6qZQP1sKriBv_CBYRLHnC4ZSXAtSgCLcBGAs/s1600/mier-ume-harutyas.jpg" alt="Card image cap">
                    </div>
                    <div class="col-md-9">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text elipsis">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img-top rounded float-left" src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                    </div>
                    <div class="col-md-9">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img-top rounded float-left" src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" alt="Card image cap">
                    </div>
                    <div class="col-md-9">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img-top rounded float-left" src="http://esiveiksmigs.lv/wp-content/uploads/talmaciba.jpg" alt="Card image cap">
                    </div>
                    <div class="col-md-9">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 card text-center">
        <h3>Kategori</h3>
    </div>
</div>
@endsection
