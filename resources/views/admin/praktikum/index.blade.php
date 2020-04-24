@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Praktikum</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Praktikum</li>
@endsection

@section('content')
    <div>
        <h3>Praktikum</h3>
    </div>
    @if(is_null($praktikum))
    <a href="{{ url('/praktikum/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Praktikum</a>
    @else
    <a href="{{ url('/praktikum/'.$praktikum->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Praktikum</a>

    @if(!is_null($praktikum->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$praktikum->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $praktikum->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
