@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Ekstrakurikuler</h1>
</div>

@if(!is_null($ekstrakurikuler))
@php
echo $ekstrakurikuler->text;
@endphp
@endif

@endsection
