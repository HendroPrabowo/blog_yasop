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
<h1>Tambah Blog Siswa</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Tambah Blog Siswa</li>
@endsection

@section('content')
    <h3>Daftar Blog Siswa</h1>
        <div class="card-body card-block">
            <form action="{{ url('/blog_siswa') }}" method="post">
                @csrf

                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" required class="form-control">
                </div>

                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul" value="{{ old('judul') }}" required class="form-control">
                </div>

                @error('link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="link" value="{{ old('link') }}" required class="form-control">
                </div>

                <input type="submit" name="submit" value="Tambah" combak class="btn btn-success">
            </form>
        </div>
@endsection
