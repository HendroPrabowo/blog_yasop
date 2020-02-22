@php
use Illuminate\Support\Str;
$i=0;
@endphp

@extends('layouts_blog.layout')

@section('isi')
@if(!is_null($carousel))
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-bottom: 50px;">
    <ol class="carousel-indicators">
        @foreach($carousel as $value)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
        <?php
        $i++;
         ?>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @php
            $i=1;
        @endphp
        @foreach($carousel as $value)
            @if($i == 1)
                <div class="carousel-item active gambar-carousel">
                    <img class="d-block w-100" src="{{ asset('storage/'.$value->post->gambar) }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $value->post->judul }}</h5>
                        <a href="/lihat/{{ $value->post->id }}" class="btn btn-primary">Read More ...</a>
                    </div>
                </div>
            @else
                <div class="carousel-item gambar-carousel">
                    <img class="d-block w-100" src="{{ asset('storage/'.$value->post->gambar) }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $value->post->judul }}</h5>
                        <a href="/lihat/{{ $value->post->id }}" class="btn btn-primary">Read More ...</a>
                    </div>
                </div>
            @endif

            @php
                $i++;
            @endphp
        @endforeach
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
@endif

<div class="text-center header">
    <h2>Semua Postingan</h2>
</div>
<div class="row">
    <div class="col-md-10">
        @foreach($post as $value)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img-top rounded float-left" src="{{ asset('storage/'.$value->gambar) }}" alt="Card image cap">
                    </div>
                    <div class="col-md-9">
                        <h4 class="card-title">{{ $value->judul }}</h4>
                        <p class="card-text elipsis"><?php echo strip_tags($value->posting); ?></p>
                        <a href="{{ url('/lihat/'.$value->id) }}" class="btn btn-primary"><span class="fa fa-eye"></span>&nbsp;Lihat</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="d-flex justify-content-center" style="margin-top: 10px">
            {{ $post->links() }}
        </div>
    </div>
    <div class="col-md-2 card text-center">
        <h3>Kategori</h3>
        <ul class="list-group">
            <a href="{{ url('/kategori/0/kategori') }}"><li class="list-group-item">Tak Berkategori</li></a>
            @foreach($kategori as $value)
            <a href="{{ url('/kategori/'.$value->id.'/kategori') }}"><li class="list-group-item">{{ $value->kategori }}</li></a>
            @endforeach
        </ul>
    </div>
</div>
@endsection
