@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Belajar</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Belajar</li>
@endsection

@section('content')
    <div>
        <h3>Belajar</h3>
    </div>
    @if(is_null($belajar))
    <a href="{{ url('/belajar/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Belajar</a>
    @else
    <a href="{{ url('/belajar/'.$belajar->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Belajar</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $belajar->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
