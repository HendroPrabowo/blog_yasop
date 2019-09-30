@extends('layouts_blog.layout')

@section('isi')
<div class="text-center header" style="margin-top: 50px">
    <h1>Visi Misi</h1>
</div>
@if(!is_null($visimisi))
@php
echo $visimisi->visimisi;
@endphp
@endif
@endsection
