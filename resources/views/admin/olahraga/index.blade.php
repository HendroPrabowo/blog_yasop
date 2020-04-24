@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Olahraga</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Olahraga</li>
@endsection

@section('content')
    <div>
        <h3>Olahraga</h3>
    </div>
    @if(is_null($olahraga))
    <a href="{{ url('/olahraga/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Olahraga</a>
    @else
    <a href="{{ url('/olahraga/'.$olahraga->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Olahraga</a>

    @if(!is_null($olahraga->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$olahraga->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $olahraga->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
