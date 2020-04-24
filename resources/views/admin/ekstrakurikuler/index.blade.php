@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Ekstrakurikuler</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Ekstrakurikuler</li>
@endsection

@section('content')
    <div>
        <h3>Ekstrakurikuler</h3>
    </div>
    @if(is_null($ekstrakurikuler))
    <a href="{{ url('/ekstrakurikuler/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Ekstrakurikuler</a>
    @else
    <a href="{{ url('/ekstrakurikuler/'.$ekstrakurikuler->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Ekstrakurikuler</a>

    @if(!is_null($ekstrakurikuler->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$ekstrakurikuler->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $ekstrakurikuler->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
