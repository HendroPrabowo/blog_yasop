@php
use Illuminate\Support\Str;
@endphp

@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 60px">
    <h2>Kategori : @if(is_null($kategori)) Tak Berkategori @else {{ $kategori->kategori }} @endif</h2>
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
                        <a href="/lihat/{{ $value->id }}" class="btn btn-primary"><span class="fa fa-eye"></span>&nbsp;Lihat</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-md-2 card text-center">
        <h3>Kategori</h3>
        <ul class="list-group">
            <a href="/kategori/0/kategori"><li class="list-group-item">Tak Berkategori</li></a>
            @foreach($kategori_all as $value)
            <a href="/kategori/{{ $value->id }}/kategori"><li class="list-group-item">{{ $value->kategori }}</li></a>
            @endforeach
        </ul>
    </div>
</div>
@endsection
