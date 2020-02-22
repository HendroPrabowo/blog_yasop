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
<h1>Tambah Pretasi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Tambah Pretasi</li>
@endsection

@section('content')
    <h3>Daftar Pretasi</h1>
        <div class="card-body card-block">
            <form action="{{ url('/daftar_prestasi') }}" method="post">
                @csrf
                @error('prestasi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Prestasi</label>
                    <input type="text" name="prestasi" value="{{ old('prestasi') }}" required class="form-control">
                </div>

                @error('siswa')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Siswa</label>
                    <input type="text" name="siswa" value="{{ old('siswa') }}" required class="form-control">
                </div>

                @error('berita')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Berita</label>
                    <input type="text" name="berita" value="{{ old('berita') }}" required class="form-control">
                </div>

                <input type="submit" name="submit" value="Tambah" class="btn btn-success">
            </form>
        </div>
@endsection
