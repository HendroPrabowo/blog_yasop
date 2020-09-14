@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Sejarah</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Sejarah</li>
@endsection

@section('content')
    <div>
        <h3>Sejarah</h3>
    </div>
    @if(is_null($sejarah))
    <a href="{{ url('/sejarah/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Sejarah</a>
    @else
    <a href="{{ url('/sejarah/'.$sejarah->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Sejarah</a>

    @if(!is_null($sejarah->judul))
        <h1 style="margin-bottom: 10px; font-family: 'Times New Roman'"><b>{{ $sejarah->judul }}</b></h1>
    @endif

    @if(!is_null($sejarah->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$sejarah->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $sejarah->sejarah;
            @endphp
        </div>
    </div>
    @endif
@endsection
