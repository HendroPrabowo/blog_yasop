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
    <h1>Daftar Siswa</h1>
        <div class="card-body card-block">
            <form action="{{ url('/daftar_siswa/'.$daftar_siswa->id) }}" method="post">
                @csrf
                @method('PUT')
                @error('no_induk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">No Induk</label>
                    <input type="text" name="no_induk" value="{{ $daftar_siswa->no_induk }}" required class="form-control">
                </div>

                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="{{ $daftar_siswa->nama }}" required class="form-control">
                </div>

                <input type="submit" name="submit" value="Edit" combak class="btn btn-success">
            </form>
        </div>
@endsection
