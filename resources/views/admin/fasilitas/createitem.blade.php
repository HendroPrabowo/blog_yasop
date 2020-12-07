@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Tambah Item {{ $fasilitas_menu->nama_menu }}</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Tambah Item {{ $fasilitas_menu->nama_menu }}</li>
@endsection

@section('content')
    <div>
        <h3>Tambah Item {{ $fasilitas_menu->nama_menu }}</h3>
    </div>

    <div class="card-body card-block">
        <form action="{{ url('/fasilitasmenu/item/'.$fasilitas_menu->id) }}" method="post"  enctype="multipart/form-data">
            @csrf
            @error('text')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="posting">Text</label>
                <textarea name="text" rows=2 class="form-control">{{ old('text') }}</textarea>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" value="{{ old('gambar') }}" class="form-control">
            </div>
            @error('gambar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="submit" name="submit" value="Tambah" combak class="btn btn-success">
        </form>
    </div>
@endsection
