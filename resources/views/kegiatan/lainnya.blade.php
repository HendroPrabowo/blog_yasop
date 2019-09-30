@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Extra Lainnya</h1>
</div>

@if(!is_null($lainnya))
@php
echo $lainnya->text;
@endphp
@endif

@endsection
