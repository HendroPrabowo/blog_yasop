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
<h1>Edit Minat Bakat</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Minat Bakat</li>
@endsection

@section('content')
    <h3>Minat Bakat</h1>
        <div class="card-body card-block">
            <form action="/minatbakat/{{ $minatbakat->id }}" method="post">
                @csrf
                @method('PUT')
                @error('minatbakat')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Minat Bakat</label>
                    <textarea name="text" rows=15 class="form-control" id="mytextarea">{{ $minatbakat->text }}</textarea>
                </div>
                <input type="submit" name="submit" value="Edit" combak class="btn btn-success">
            </form>
        </div>
@endsection
