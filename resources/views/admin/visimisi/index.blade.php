@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Visi Misi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Visi Misi</li>
@endsection

@section('content')
    <div>
        <h3>Visi Misi</h3>
    </div>
    @if(is_null($visimisi))
    <a href="{{ url('/visimisi/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Visi Misi</a>
    @else
    <a href="{{ url('/visimisi/'.$visimisi->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Visi Misi</a>

    @if(!is_null($visimisi->judul))
        <h1 style="text-align: center; margin-bottom: 10px; font-family: 'Times New Roman'"><b>{{ $visimisi->judul }}</b></h1>
    @endif

    @if(!is_null($visimisi->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$visimisi->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $visimisi->visimisi;
            @endphp
        </div>
    </div>
    @endif

@endsection
