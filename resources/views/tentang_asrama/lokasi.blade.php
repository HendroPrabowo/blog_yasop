@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Lokasi</h1>
</div>

@if(!is_null($lokasi))
    @if(!is_null($lokasi->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$lokasi->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $lokasi->lokasi;
@endphp
@endif

@endsection
