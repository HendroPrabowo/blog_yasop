@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Kesehatan</h1>
</div>
@if(!is_null($kesehatan))
@php
echo $kesehatan->text;
@endphp
@endif
@endsection
