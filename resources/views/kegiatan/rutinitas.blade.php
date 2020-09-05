@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($rutinitas))
    @if(!is_null($rutinitas->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$rutinitas->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $rutinitas->text;
@endphp
@endif

@endsection
