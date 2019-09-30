@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Sejarah</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Sejarah</li>
@endsection

@section('content')
    <div>
        <h3>Sejarah</h3>
    </div>
    @if(is_null($sejarah))
    <a href="/sejarah/create" class="btn btn-success" style="margin: 10px 0px">Tambah Sejarah</a>
    @else
    <a href="/sejarah/{{ $sejarah->id }}/edit" class="btn btn-success" style="margin: 10px 0px">Edit Sejarah</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $sejarah->sejarah;
            @endphp
        </div>
    </div>
    @endif
@endsection
