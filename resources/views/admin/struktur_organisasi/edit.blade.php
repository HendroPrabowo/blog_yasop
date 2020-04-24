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
<h1>Edit Struktur Organisasi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Struktur Organisasi</li>
@endsection

@section('content')
    <h3>Struktur Organisasi</h3>
        <div class="card-body card-block">
            <form action="{{ url('/struktur_organisasi/'.$struktur_organisasi->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @error('struktur_organisasi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Struktur Organisasi</label>
                    <textarea name="text" rows=15 class="form-control" id="mytextarea">{{ $struktur_organisasi->text }}</textarea>
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
