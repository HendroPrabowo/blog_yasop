@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Tambah Sosial</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Sosial</li>
@endsection

@section('content')
    <h3>Sosial</h3>
    <div class="card-body card-block">
        <form action="{{ url('/sosial') }}" method="post" enctype="multipart/form-data">
            @csrf
            @error('sosial')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="posting">Caption</label>
                <textarea name="text" rows=2 class="form-control">{{ old('sosial') }}</textarea>
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
