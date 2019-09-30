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
<h1>Tambah Ekstrakurikuler</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Ekstrakurikuler</li>
@endsection

@section('content')
    <h3>Ekstrakurikuler</h1>
        <div class="card-body card-block">
            <form action="/ekstrakurikuler" method="post">
                @csrf
                @error('ekstrakurikuler')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Ekstrakurikuler</label>
                    <textarea name="text" rows=15 class="form-control" id="mytextarea">{{ old('ekstrakurikuler') }}</textarea>
                </div>
                <input type="submit" name="submit" value="Tambah" combak class="btn btn-success">
            </form>
        </div>
@endsection
