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
<h1>Tambah Akomodasi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Akomodasi</li>
@endsection

@section('content')
    <h3>Akomodasi</h1>
        <div class="card-body card-block">
            <form action="/akomodasi" method="post">
                @csrf
                @error('akomodasi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Akomodasi</label>
                    <textarea name="text" rows=15 class="form-control" id="mytextarea">{{ old('akomodasi') }}</textarea>
                </div>
                <input type="submit" name="submit" value="Tambah" combak class="btn btn-success">
            </form>
        </div>
@endsection
