@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Rutinitas</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Rutinitas</li>
@endsection

@section('content')
    <div>
        <h3>Rutinitas</h3>
    </div>
    @if(is_null($rutinitas))
    <a href="{{ url('/rutinitas/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Rutinitas</a>
    @else
    <a href="{{ url('/rutinitas/'.$rutinitas->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Rutinitas</a>

    @if(!is_null($rutinitas->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$rutinitas->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $rutinitas->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
