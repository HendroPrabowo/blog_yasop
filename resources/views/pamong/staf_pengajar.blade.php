@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($staf_pengajar))
    @if(!is_null($staf_pengajar->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$staf_pengajar->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $staf_pengajar->text;
@endphp
@endif

@endsection
