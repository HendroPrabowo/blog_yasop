@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Organisasi Siswa</h1>
</div>

@if(!is_null($organisasi_siswa))
@php
echo $organisasi_siswa->text;
@endphp
@endif

@endsection
