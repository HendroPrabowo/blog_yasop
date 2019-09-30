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
<h1>Tambah Organisasi Siswa</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Organisasi Siswa</li>
@endsection

@section('content')
    <h3>Organisasi Siswa</h1>
        <div class="card-body card-block">
            <form action="/organisasi_siswa" method="post">
                @csrf
                @error('organisasi_siswa')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Organisasi Siswa</label>
                    <textarea name="text" rows=15 class="form-control" id="mytextarea">{{ old('organisasi_siswa') }}</textarea>
                </div>
                <input type="submit" name="submit" value="Tambah" combak class="btn btn-success">
            </form>
        </div>
@endsection
