@extends('layouts_blog.layout')

@section('isi')
<div class="text-center header" style="margin-top: 50px">
    <h1>Sejarah</h1>
</div>
@if(!is_null($sejarah))
@php
echo $sejarah->sejarah;
@endphp
@endif
@endsection
