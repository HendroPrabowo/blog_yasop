@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Kesehatan</h1>
</div>
@if(!is_null($kesehatan))
    @if(!is_null($kesehatan->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$kesehatan->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $kesehatan->text;
@endphp
@endif
@endsection
