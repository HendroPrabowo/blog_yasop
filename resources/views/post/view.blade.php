@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 60px">
    <h1>{{ $post->judul }}</h1>
</div>
<img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$post->gambar) }}" style="margin-bottom: 20px">

@php
echo $post->posting;
@endphp

@endsection
