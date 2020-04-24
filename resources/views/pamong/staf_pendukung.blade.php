@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Staf Pendukung</h1>
</div>

@if(!is_null($staf_pendukung))
    @if(!is_null($staf_pendukung->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$staf_pendukung->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $staf_pendukung->text;
@endphp
@endif

@endsection
