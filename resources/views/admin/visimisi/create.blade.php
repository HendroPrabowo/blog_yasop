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
<h1>Tambah Visi Misi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Visi Misi</li>
@endsection

@section('content')
    <h3>Visi Misi</h3>
        <div class="card-body card-block">
            <form action="{{ url('/visimisi') }}" method="post" enctype="multipart/form-data">
                @csrf
                @error('visimisi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Visi Misi</label>
                    <textarea name="visimisi" rows=15 class="form-control" id="mytextarea">{{ old('visimisi') }}</textarea>
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
