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
<h1>Edit Lokasi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Lokasi</li>
@endsection

@section('content')
    <h3>Lokasi</h1>
        <div class="card-body card-block">
            <form action="/lokasi/{{ $lokasi->id }}" method="post">
                @csrf
                @method('PUT')
                @error('lokasi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Lokasi</label>
                    <textarea name="lokasi" rows=15 class="form-control" id="mytextarea" required>{{ $lokasi->lokasi }}</textarea>
                </div>
                <input type="submit" name="submit" value="Edit" combak class="btn btn-success">
            </form>
        </div>
@endsection
