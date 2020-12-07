@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Fasilitas Menu</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Fasilitas Menu</li>
@endsection

@section('content')
    <div>
        <h3>Fasilitas Menu</h3>
    </div>

    <div class="container-fluid" style="margin-top: 20px">
        <div class="list-group">
            <b  class="list-group-item list-group-item-action active">
                List Menu Fasilitas
            </b>
            @foreach($fasilitas_menu as $val)
                <a href="{{ url('/fasilitasmenu/'.$val->id) }}" class="list-group-item list-group-item-action">{{ $val->nama_menu }}</a>
            @endforeach
        </div>
    </div>


    <a href="{{ url('/fasilitasmenu/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Menu Fasilitas</a>
@endsection
