@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Lokasi</h1>
</div>

@if(!is_null($lokasi))
@php
echo $lokasi->lokasi;
@endphp
@endif

@endsection
