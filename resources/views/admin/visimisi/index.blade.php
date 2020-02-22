@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Visi Misi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Visi Misi</li>
@endsection

@section('content')
    <div>
        <h3>Visi Misi</h3>
    </div>
    @if(is_null($visimisi))
    <a href="{{ url('/visimisi/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Visi Misi</a>
    @else
    <a href="{{ url('/visimisi/'.$visimisi->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Visi Misi</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $visimisi->visimisi;
            @endphp
        </div>
    </div>
    @endif
@endsection
