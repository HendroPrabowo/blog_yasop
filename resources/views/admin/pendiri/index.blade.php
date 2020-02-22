@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Pendiri</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Pendiri</li>
@endsection

@section('content')
    <div>
        <h3>Pendiri</h3>
    </div>
    @if(is_null($pendiri))
    <a href="{{ url('/pendiri/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Pendiri</a>
    @else
    <a href="{{ url('/pendiri/'.$pendiri->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Pendiri</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $pendiri->pendiri;
            @endphp
        </div>
    </div>
    @endif
@endsection
