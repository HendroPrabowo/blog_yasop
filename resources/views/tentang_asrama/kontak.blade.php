@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Asrama Yayasan Soposurung</h1>
</div>

@if(!is_null($kontak))
    @if(!is_null($kontak->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$kontak->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $kontak->kontak;
@endphp
@endif

@endsection
