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
<h1>Edit Staf Pengajar</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Staf Pengajar</li>
@endsection

@section('content')
    <h3>Staf Pengajar</h1>
        <div class="card-body card-block">
            <form action="/staf_pengajar/{{ $staf_pengajar->id }}" method="post">
                @csrf
                @method('PUT')
                @error('staf_pengajar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Staf Pengajar</label>
                    <textarea name="text" rows=15 class="form-control" id="mytextarea">{{ $staf_pengajar->text }}</textarea>
                </div>
                <input type="submit" name="submit" value="Edit" combak class="btn btn-success">
            </form>
        </div>
@endsection
