@extends('layouts_blog.layout')

@section('isi')
<div class="text-center header" style="margin-top: 50px">

</div>

@if(!is_null($visimisi))
    @if(!is_null($visimisi->judul))
        <h1 style="font-family: 'Times New Roman'"><b>{{ $visimisi->judul  }}</b></h1>
    @endif

    @if(!is_null($visimisi->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$visimisi->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $visimisi->visimisi;
@endphp
@endif
@endsection
