@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($lainnya))
    @if(!is_null($lainnya->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$lainnya->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $lainnya->text;
@endphp
@endif

@endsection
