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
    <a href="/kontak/create" class="btn btn-success" style="margin: 10px 0px">Tambah Kontak</a>
    @else
    <a href="/kontak/{{ $kontak->id }}/edit" class="btn btn-success" style="margin: 10px 0px">Edit Kontak</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $kontak->kontak;
            @endphp
        </div>
    </div>
    @endif
@endsection
