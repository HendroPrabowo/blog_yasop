@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Edit Kesehatan</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Edit Kesehatan</li>
@endsection

@section('content')
    <h3>Kesehatan</h3>
    <div class="card-body card-block">
        <form action="{{ url('/kesehatan/'.$kesehatan->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @error('kesehatan')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="posting">Caption</label>
                <textarea name="text" rows=2 class="form-control">{{ $kesehatan->text }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <div>
                    <label>Pilihan Untuk Gambar</label>
                    <select name="pilihan_gambar" class="form-control">
                        <option value="tetap">Tetap</option>
                        <option value="ganti">Ganti</option>
                        <option value="hapus">Hapus</option>
                    </select>
                </div>
                <input type="file" name="gambar" value="{{ old('gambar') }}" class="form-control">
            </div>
            @error('gambar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="submit" name="submit" value="Edit" combak class="btn btn-success">
        </form>
    </div>
@endsection
