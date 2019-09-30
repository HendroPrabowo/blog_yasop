@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Staf Pengajar</h1>
</div>

@if(!is_null($staf_pengajar))
@php
echo $staf_pengajar->text;
@endphp
@endif

@endsection
