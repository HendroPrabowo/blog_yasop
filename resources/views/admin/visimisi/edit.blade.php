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
<h1>Edit Visi Misi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Visi Misi</li>
@endsection

@section('content')
    <h3>Visi Misi</h3>
        <div class="card-body card-block">
            <form action="{{ url('/visimisi/'.$visimisi->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="posting">Judul</label>
                    <input name="judul" rows=15 class="form-control" value="{{ $visimisi->judul }}">
                </div>
                @error('visimisi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Visi Misi</label>
                    <textarea name="visimisi" rows=15 class="form-control" id="mytextarea">{{ $visimisi->visimisi }}</textarea>
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
