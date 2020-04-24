@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Staf Pembina</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Staf Pembina</li>
@endsection

@section('content')
    <div>
        <h3>Staf Pembina</h3>
    </div>
    @if(is_null($staf_pembina))
    <a href="{{ url('/staf_pembina/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Staf Pembina</a>
    @else
    <a href="{{ url('/staf_pembina/'.$staf_pembina->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Staf Pembina</a>

    @if(!is_null($staf_pembina->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$staf_pembina->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $staf_pembina->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
