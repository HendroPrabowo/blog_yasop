@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Sosial</h1>
</div>

@if(!is_null($sosial))
@php
echo $sosial->text;
@endphp
@endif

@endsection
