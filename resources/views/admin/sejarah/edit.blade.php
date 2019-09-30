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
<h1>Edit Sejarah</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Sejarah</li>
@endsection

@section('content')
    <h3>Sejarah</h1>
        <div class="card-body card-block">
            <form action="/sejarah/{{ $sejarah->id }}" method="post">
                @csrf
                @method('PUT')
                @error('sejarah')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Sejarah</label>
                    <textarea name="sejarah" rows=15 class="form-control" id="mytextarea" required>{{ $sejarah->sejarah }}</textarea>
                </div>
                <input type="submit" name="submit" value="Edit" combak class="btn btn-success">
            </form>
        </div>
@endsection
