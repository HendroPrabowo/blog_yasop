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
<h1>Edit Sejarah</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Sejarah</li>
@endsection

@section('content')
    <h3>Sejarah</h3>
        <div class="card-body card-block">
            <form action="{{ url('/sejarah/'.$sejarah->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="posting">Judul</label>
                    <input name="judul" rows=15 class="form-control" value="{{ $sejarah->judul }}">
                </div>
                @error('sejarah')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Sejarah</label>
                    <textarea name="sejarah" rows=15 class="form-control" id="mytextarea" required>{{ $sejarah->sejarah }}</textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <div>
                        <label>Pilihan Untuk Gambar</label>
                        <select name="pilihan_gambar" class="form-control">
                            <option value="tetap">Tetap</option>
                            <option value="ganti">Ganti Gambar</option>
                            <option value="hapus">Hapus Gambar</option>
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
