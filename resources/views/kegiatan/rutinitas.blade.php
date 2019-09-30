@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Rutinitas</h1>
</div>

@if(!is_null($rutinitas))
@php
echo $rutinitas->text;
@endphp
@endif

@endsection
