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
    <a href="/lokasi/create" class="btn btn-success" style="margin: 10px 0px">Tambah Lokasi</a>
    @else
    <a href="/lokasi/{{ $lokasi->id }}/edit" class="btn btn-success" style="margin: 10px 0px">Edit Lokasi</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $lokasi->lokasi;
            @endphp
        </div>
    </div>
    @endif
@endsection
