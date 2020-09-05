@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($organisasi_siswa))
@php
echo $organisasi_siswa->text;
@endphp
@endif

@endsection
