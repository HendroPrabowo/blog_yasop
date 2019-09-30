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
<h1>Tambah Staf Pengajar</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Staf Pengajar</li>
@endsection

@section('content')
    <h3>Staf Pengajar</h1>
        <div class="card-body card-block">
            <form action="/staf_pengajar" method="post">
                @csrf
                @error('staf_pengajar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Staf Pengajar</label>
                    <textarea name="text" rows=15 class="form-control" id="mytextarea">{{ old('staf_pengajar') }}</textarea>
                </div>
                <input type="submit" name="submit" value="Tambah" combak class="btn btn-success">
            </form>
        </div>
@endsection
