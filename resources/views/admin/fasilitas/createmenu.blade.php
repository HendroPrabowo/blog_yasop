@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Tambah Menu</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Tambah Menu</li>
@endsection

@section('content')
    <div>
        <h3>Tambah Menu</h3>
    </div>

    <div class="card-body card-block">
        <form action="{{ url('/fasilitasmenu/save') }}" method="post">
            @csrf
            @error('nama_menu')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="posting">Nama Menu</label>
                <input type="text" name="nama_menu" class="form-control" value="{{ old('nama_menu') }}">
            </div>

            @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="posting">Deskripsi</label>
                <textarea name="deskripsi" rows=2 class="form-control">{{ old('deskirpsi') }}</textarea>
            </div>
            <input type="submit" name="submit" value="Tambah" combak class="btn btn-success">
        </form>
    </div>
@endsection
