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
<h1>Tambah Sejarah</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Sejarah</li>
@endsection

@section('content')
    <h3>Sejarah</h1>
        <div class="card-body card-block">
            <form action="{{ url('/sejarah') }}" method="post" enctype="multipart/form-data">
                @csrf
                @error('sejarah')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Sejarah</label>
                    <textarea name="sejarah" rows=15 class="form-control" id="mytextarea">{{ old('sejarah') }}</textarea>
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
