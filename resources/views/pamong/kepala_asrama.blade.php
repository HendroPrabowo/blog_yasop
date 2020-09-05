@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($kepala_asrama))
    @if(!is_null($kepala_asrama->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$kepala_asrama->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $kepala_asrama->text;
@endphp
@endif

@endsection
