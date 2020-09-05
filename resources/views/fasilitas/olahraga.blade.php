@extends('layouts_blog.layout')

@section('isi')
<div class="text-center header" style="margin-top: 50px">

</div>
@if(!is_null($olahraga))
    @if(!is_null($olahraga->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$olahraga->gambar) }}" style="margin-bottom: 20px">
    @endif
@php
echo $olahraga->text;
@endphp
@endif
@endsection
