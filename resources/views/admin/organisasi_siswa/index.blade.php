@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Organisasi Siswa</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Organisasi Siswa</li>
@endsection

@section('content')
    <div>
        <h3>Organisasi Siswa</h3>
    </div>
    @if(is_null($organisasi_siswa))
    <a href="{{ url('/organisasi_siswa/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Organisasi Siswa</a>
    @else
    <a href="{{ url('/organisasi_siswa/'.$organisasi_siswa->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Organisasi Siswa</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $organisasi_siswa->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
