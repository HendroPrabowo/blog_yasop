@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Staf Pembina</h1>
</div>

@if(!is_null($staf_pembina))
    @if(!is_null($staf_pembina->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$staf_pembina->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $staf_pembina->text;
@endphp
@endif

@endsection
