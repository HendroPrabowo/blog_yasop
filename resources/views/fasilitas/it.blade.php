@extends('layouts_blog.layout')

@section('isi')
<div class="text-center header" style="margin-top: 50px">
    <h1>IT</h1>
</div>
@if(!is_null($it))
@php
echo $it->text;
@endphp
@endif
@endsection
