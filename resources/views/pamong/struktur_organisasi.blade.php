@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Struktu Organisasi</h1>
</div>

@if(!is_null($struktur_organisasi))
@php
echo $struktur_organisasi->text;
@endphp
@endif

@endsection
