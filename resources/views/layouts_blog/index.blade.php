@extends('layouts_blog.layout')

@section('isi')

    <!-- Jumbotron Header -->
    <!-- <header class="jumbotron my-4">
      <h1 class="display-3">A Warm Welcome!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header> -->

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-bottom: 50px;">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
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
          <img class="d-block w-100" src="https://i1.sndcdn.com/artworks-000367817067-ydsqb8-t500x500.jpg" alt="Third slide">
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

    <!-- Page Features -->
    <div class="row text-center">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->
@endsection
