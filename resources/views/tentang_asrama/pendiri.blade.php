@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($pendiri))
    @if(!is_null($pendiri->judul))
        <h1 style="text-align: center; font-family: 'Times New Roman'"><b>{{ $pendiri->judul  }}</b></h1>
    @endif

    @if(!is_null($pendiri->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$pendiri->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $pendiri->pendiri;
@endphp
@endif
@endsection
