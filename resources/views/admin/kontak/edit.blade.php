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
<h1>Edit Kontak</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Kontak</li>
@endsection

@section('content')
    <h3>Kontak</h3>
        <div class="card-body card-block">
            <form action="{{ url('/kontak/'.$kontak->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="posting">Judul</label>
                    <input name="judul" rows=15 class="form-control" value="{{ $kontak->judul }}">
                </div>
                @error('kontak')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Kontak</label>
                    <textarea name="kontak" rows=15 class="form-control" id="mytextarea" required>{{ $kontak->kontak }}</textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" value="{{ old('gambar') }}" class="form-control">
                </div>
                @error('gambar')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="submit" name="submit" value="Edit" combak class="btn btn-success">
            </form>
        </div>
@endsection
