@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Fasilitas Pendidikan</h1>
</div>

@if(!is_null($belajar))
@php
echo $belajar->text;
@endphp
@endif

@endsection
