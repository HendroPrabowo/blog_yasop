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
<h1>Tambah Pendiri</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Pendiri</li>
@endsection

@section('content')
    <h3>Pendiri</h1>
        <div class="card-body card-block">
            <form action="/pendiri" method="post">
                @csrf
                @error('pendiri')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Pendiri</label>
                    <textarea name="pendiri" rows=15 class="form-control" id="mytextarea">{{ old('pendiri') }}</textarea>
                </div>
                <input type="submit" name="submit" value="Tambah" combak class="btn btn-success">
            </form>
        </div>
@endsection
