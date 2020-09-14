@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($kontak))
    @if(!is_null($kontak->judul))
        <h1 style="text-align: center; font-family: 'Times New Roman'"><b>{{ $kontak->judul  }}</b></h1>
    @endif

    @if(!is_null($kontak->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$kontak->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $kontak->kontak;
@endphp
@endif

@endsection
