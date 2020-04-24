@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Kepala Asrama</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Kepala Asrama</li>
@endsection

@section('content')
    <div>
        <h3>Kepala Asrama</h3>
    </div>
    @if(is_null($kepala_asrama))
    <a href="{{ url('/kepala_asrama/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Kepala Asrama</a>
    @else
    <a href="{{ url('/kepala_asrama/'.$kepala_asrama->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Kepala Asrama</a>

    @if(!is_null($kepala_asrama->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$kepala_asrama->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $kepala_asrama->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
