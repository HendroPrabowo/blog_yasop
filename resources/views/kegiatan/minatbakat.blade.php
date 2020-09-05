@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

@if(!is_null($minatbakat))
    @if(!is_null($minatbakat->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$minatbakat->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $minatbakat->text;
@endphp
@endif

@endsection
