@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Ekstrakurikuler</h1>
</div>

@if(!is_null($ekstrakurikuler))
    @if(!is_null($ekstrakurikuler->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$ekstrakurikuler->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $ekstrakurikuler->text;
@endphp
@endif

@endsection
