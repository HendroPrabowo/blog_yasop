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
<h1>Edit Siswa</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Siswa</li>
@endsection

@section('content')
    <h3>Daftar Siswa</h1>
        <div class="card-body card-block">
            <form action="/daftar_prestasi/{{ $daftar_prestasi->id }}" method="post">
                @csrf
                @method('PUT')
                @error('prestasi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Prestasi</label>
                    <input type="text" name="prestasi" value="{{ $daftar_prestasi->prestasi }}" required class="form-control">
                </div>

                @error('siswa')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Siswa</label>
                    <input type="text" name="siswa" value="{{ $daftar_prestasi->siswa }}" required class="form-control">
                </div>

                @error('berita')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Berita</label>
                    <input type="text" name="berita" value="{{ $daftar_prestasi->berita }}" required class="form-control">
                </div>

                <input type="submit" name="submit" value="Edit" class="btn btn-success">
            </form>
        </div>
@endsection
