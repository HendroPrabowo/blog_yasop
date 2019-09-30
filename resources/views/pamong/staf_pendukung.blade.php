@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Staf Pendukung</h1>
</div>

@if(!is_null($staf_pendukung))
@php
echo $staf_pendukung->text;
@endphp
@endif

@endsection
