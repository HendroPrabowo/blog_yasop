@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($lokasi))
    @if(!is_null($lokasi->judul))
        <h1 style="font-family: 'Times New Roman'"><b>{{ $lokasi->judul  }}</b></h1>
    @endif

    @if(!is_null($lokasi->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$lokasi->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $lokasi->lokasi;
@endphp
@endif

@endsection
