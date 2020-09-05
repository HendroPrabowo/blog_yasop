@extends('layouts_blog.layout')

@section('isi')
<div class="text-center header" style="margin-top: 50px">

</div>

@if(!is_null($sejarah))
    @if(!is_null($sejarah->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$sejarah->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $sejarah->sejarah;
@endphp
@endif
@endsection
