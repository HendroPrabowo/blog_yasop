@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Pendiri</h1>
</div>
@if(!is_null($pendiri))
@php
echo $pendiri->pendiri;
@endphp
@endif
@endsection
