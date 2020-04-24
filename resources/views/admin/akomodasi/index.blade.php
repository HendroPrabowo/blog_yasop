@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Akomodasi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Akomodasi</li>
@endsection

@section('content')
    <div>
        <h3>Akomodasi</h3>
    </div>
    @if(is_null($akomodasi))
    <a href="{{ url('/akomodasi/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Akomodasi</a>
    @else
    <a href="{{ url('/akomodasi/'.$akomodasi->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Akomodasi</a>

    @if(!is_null($akomodasi->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$akomodasi->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $akomodasi->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
