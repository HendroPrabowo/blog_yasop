@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($praktikum))
    @if(!is_null($praktikum->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$praktikum->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $praktikum->text;
@endphp
@endif

@endsection
