@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($struktur_organisasi))
    @if(!is_null($struktur_organisasi->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$struktur_organisasi->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $struktur_organisasi->text;
@endphp
@endif

@endsection
