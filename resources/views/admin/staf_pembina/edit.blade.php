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
<h1>Edit Staf Pembina</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Staf Pembina</li>
@endsection

@section('content')
    <h3>Staf Pembina</h3>
        <div class="card-body card-block">
            <form action="{{ url('/staf_pembina/'.$staf_pembina->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $staf_pembina->nama }}">
                </div>

                @error('jabatan')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="{{ $staf_pembina->jabatan }}">
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <div>
                        <label>Pilihan Untuk Gambar</label>
                        <select name="pilihan_gambar" class="form-control">
                            <option value="tetap">Tetap</option>
                            <option value="ganti">Ganti Gambar</option>
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
