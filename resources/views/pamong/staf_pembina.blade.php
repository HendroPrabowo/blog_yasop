@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Staf Pembina</h1>
</div>

@if(!is_null($staf_pembina))
@php
echo $staf_pembina->text;
@endphp
@endif

@endsection
