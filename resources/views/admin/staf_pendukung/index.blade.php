@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Staf Pendukung</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Staf Pendukung</li>
@endsection

@section('content')
    <div>
        <h3>Staf Pendukung</h3>
    </div>
    @if(is_null($staf_pendukung))
    <a href="/staf_pendukung/create" class="btn btn-success" style="margin: 10px 0px">Tambah Staf Pendukung</a>
    @else
    <a href="/staf_pendukung/{{ $staf_pendukung->id }}/edit" class="btn btn-success" style="margin: 10px 0px">Edit Staf Pendukung</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $staf_pendukung->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
