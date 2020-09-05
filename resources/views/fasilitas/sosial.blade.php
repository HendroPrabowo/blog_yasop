@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($sosial))
    @if(!is_null($sosial->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$sosial->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $sosial->text;
@endphp
@endif

@endsection
