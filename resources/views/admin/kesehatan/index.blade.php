@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Kesehatan</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Kesehatan</li>
@endsection

@section('content')
    <div>
        <h3>Kesehatan</h3>
    </div>
    @if(is_null($kesehatan))
    <a href="{{ url('/kesehatan/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Kesehatan</a>
    @else
    <a href="{{ url('/kesehatan/'.$kesehatan->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Kesehatan</a>

    @if(!is_null($kesehatan->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$kesehatan->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $kesehatan->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
