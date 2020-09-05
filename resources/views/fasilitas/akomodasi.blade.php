@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($akomodasi))
    @if(!is_null($akomodasi->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$akomodasi->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $akomodasi->text;
@endphp
@endif

@endsection
