@extends('layouts.layout')

@section('head')
<script src="{{ asset('/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: '#mytextarea',
        // menubar: false,
    });
</script>
@endsection

@section('breadcrumb_title')
<h1>Tambah Staf Pendukung</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Staf Pendukung</li>
@endsection

@section('content')
    <h3>Staf Pendukung</h3>
        <div class="card-body card-block">
            <form action="{{ url('/staf_pendukung') }}" method="post" enctype="multipart/form-data">
                @csrf
                @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                </div>

                @error('jabatan')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan') }}">
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
