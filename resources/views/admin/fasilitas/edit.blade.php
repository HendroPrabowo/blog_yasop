@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>{{ $fasilitas_menu->nama_menu }}</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">{{ $fasilitas_menu->nama_menu }}</li>
@endsection

@section('content')
    <div>
        <h3>{{ $fasilitas_menu->nama_menu }}</h3>
    </div>

    <div class="card-body card-block">
        <form action="{{ url('/fasilitasmenu/edit/'.$fasilitas_menu->id) }}" method="post">
            @csrf
            @method('PUT')
            @error('nama_menu')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="posting">Nama Menu</label>
                <input type="text" name="nama_menu" class="form-control" value="{{ $fasilitas_menu->nama_menu }}">
            </div>

            @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="posting">Deskripsi</label>
                <textarea name="deskripsi" rows=2 class="form-control">{{ $fasilitas_menu->deskripsi }}</textarea>
            </div>
            <input type="submit" name="submit" value="Edit" combak class="btn btn-success">
        </form>
    </div>
@endsection
