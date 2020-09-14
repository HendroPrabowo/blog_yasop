@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Lokasi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Lokasi</li>
@endsection

@section('content')
    <div>
        <h3>Lokasi</h3>
    </div>
    @if(is_null($lokasi))
    <a href="{{ url('/lokasi/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Lokasi</a>
    @else
    <a href="{{ url('/lokasi/'.$lokasi->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Lokasi</a>

    @if(!is_null($lokasi->judul))
        <h1 style="text-align: center; margin-bottom: 10px; font-family: 'Times New Roman'"><b>{{ $lokasi->judul }}</b></h1>
    @endif

    @if(!is_null($lokasi->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$lokasi->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $lokasi->lokasi;
            @endphp
        </div>
    </div>
    @endif
@endsection
