@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Struktur Organisasi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Struktur Organisasi</li>
@endsection

@section('content')
    <div>
        <h3>Struktur Organisasi</h3>
    </div>
    @if(is_null($struktur_organisasi))
    <a href="{{ url('/struktur_organisasi/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Struktur Organisasi</a>
    @else
    <a href="{{ url('/struktur_organisasi/'.$struktur_organisasi->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Struktur Organisasi</a>

    @if(!is_null($struktur_organisasi->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$struktur_organisasi->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $struktur_organisasi->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
