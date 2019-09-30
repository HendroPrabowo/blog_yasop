@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Asrama Yayasan Soposurung</h1>
</div>

@if(!is_null($kontak))
@php
echo $kontak->kontak;
@endphp
@endif

@endsection
