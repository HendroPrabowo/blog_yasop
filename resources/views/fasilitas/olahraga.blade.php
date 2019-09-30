@extends('layouts_blog.layout')

@section('isi')
<div class="text-center header" style="margin-top: 50px">
    <h1>Olah Raga</h1>
</div>
@if(!is_null($olahraga))
@php
echo $olahraga->text;
@endphp
@endif
@endsection
