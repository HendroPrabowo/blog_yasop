@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Kontak</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Kontak</li>
@endsection

@section('content')
    <div>
        <h3>Kontak</h3>
    </div>
    @if(is_null($kontak))
    <a href="{{ url('/kontak/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Kontak</a>
    @else
    <a href="{{ url('/kontak/'.$kontak->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Kontak</a>

    @if(!is_null($kontak->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$kontak->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $kontak->kontak;
            @endphp
        </div>
    </div>
    @endif
@endsection
