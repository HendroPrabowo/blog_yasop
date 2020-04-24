@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Staf Pengajar</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Staf Pengajar</li>
@endsection

@section('content')
    <div>
        <h3>Staf Pengajar</h3>
    </div>
    @if(is_null($staf_pengajar))
    <a href="{{ url('/staf_pengajar/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Staf Pengajar</a>
    @else
    <a href="{{ url('/staf_pengajar/'.$staf_pengajar->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Staf Pengajar</a>

    @if(!is_null($staf_pengajar->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$staf_pengajar->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $staf_pengajar->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
