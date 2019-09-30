@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Akomodasi</h1>
</div>

@if(!is_null($akomodasi))
@php
echo $akomodasi->text;
@endphp
@endif

@endsection
