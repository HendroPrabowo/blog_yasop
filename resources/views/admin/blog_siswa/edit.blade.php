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
<h1>Edit Blog Siswa</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Blog Siswa</li>
@endsection

@section('content')
    <h3>Daftar Blog Siswa</h1>
        <div class="card-body card-block">
            <form action="/blog_siswa/{{ $blog_siswa->id }}" method="post">
                @csrf
                @method('PUT')
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="{{ $blog_siswa->nama }}" required class="form-control">
                </div>

                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul" value="{{ $blog_siswa->judul }}" required class="form-control">
                </div>

                @error('link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="link" value="{{ $blog_siswa->link }}" required class="form-control">
                </div>
                </div>

                <input type="submit" name="submit" value="Edit" combak class="btn btn-success">
            </form>
        </div>
@endsection
