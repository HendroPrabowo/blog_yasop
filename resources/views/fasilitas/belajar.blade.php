@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Fasilitas Pendidikan</h1>
</div>

@if(!is_null($belajar))
    @if(!is_null($belajar->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$belajar->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $belajar->text;
@endphp
@endif

@endsection
