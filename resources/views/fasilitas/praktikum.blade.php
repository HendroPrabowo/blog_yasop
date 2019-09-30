@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Fasilitas Praktikum</h1>
</div>

@if(!is_null($praktikum))
@php
echo $praktikum->text;
@endphp
@endif

@endsection
