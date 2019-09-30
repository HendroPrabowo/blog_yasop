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
<h1>Tambah Kepala Asrama</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Kepala Asrama</li>
@endsection

@section('content')
    <h3>Kepala Asrama</h1>
        <div class="card-body card-block">
            <form action="/kepala_asrama" method="post">
                @csrf
                @error('kepala_asrama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Kepala Asrama</label>
                    <textarea name="text" rows=15 class="form-control" id="mytextarea">{{ old('kepala_asrama') }}</textarea>
                </div>
                <input type="submit" name="submit" value="Tambah" combak class="btn btn-success">
            </form>
        </div>
@endsection
