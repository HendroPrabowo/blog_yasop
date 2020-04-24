@extends('layouts.layout')

@section('breadcrumb_title')
<h1>IT</h1>
@endsection

@section('breadcrumb_list')
<li class="active">IT</li>
@endsection

@section('content')
    <div>
        <h3>IT</h3>
    </div>
    @if(is_null($it))
    <a href="{{ url('/it/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah IT</a>
    @else
    <a href="{{ url('/it/'.$it->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit IT</a>

    @if(!is_null($it->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$it->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $it->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
