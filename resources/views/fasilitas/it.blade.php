@extends('layouts_blog.layout')

@section('isi')
<div class="text-center header" style="margin-top: 50px">
    <h1>IT</h1>
</div>
@if(!is_null($it))
    @if(!is_null($it->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$it->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $it->text;
@endphp
@endif
@endsection
