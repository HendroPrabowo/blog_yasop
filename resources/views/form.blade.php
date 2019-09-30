@extends('layouts.layout')

@section('head')
<script src="{{ asset('tinymce\js\tinymce\tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        // toolbar: 'undo redo | styleselect | bold italic | link image',
    });
</script>
@endsection

@section('breadcrumb_title')
    <h1>Test Form</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Badges</li>
@endsection

@section('content')
    <h3>Form</h3>

    <form class="" action="index.html" method="post">
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea name="isi" class="form-control" id="mytextarea"></textarea>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
    </form>
@endsection

@section('foot')
@endsection
