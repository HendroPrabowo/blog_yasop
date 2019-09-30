@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Kepala Asrama</h1>
</div>

@if(!is_null($kepala_asrama))
@php
echo $kepala_asrama->text;
@endphp
@endif

@endsection
