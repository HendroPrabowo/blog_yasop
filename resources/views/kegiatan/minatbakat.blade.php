@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Club Minat - Bakat</h1>
</div>

@if(!is_null($minatbakat))
@php
echo $minatbakat->text;
@endphp
@endif

@endsection
