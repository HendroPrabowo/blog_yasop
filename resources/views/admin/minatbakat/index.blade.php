@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Minat Bakat</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Minat Bakat</li>
@endsection

@section('content')
    <div>
        <h3>Minat Bakat</h3>
    </div>
    @if(is_null($minatbakat))
    <a href="{{ url('/minatbakat/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Minat Bakat</a>
    @else
    <a href="{{ url('/minatbakat/'.$minatbakat->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Minat Bakat</a>

    @if(!is_null($minatbakat->gambar))
        <img class="rounded mx-auto d-block w-50" src="{{ asset('storage/'.$minatbakat->gambar) }}" style="margin-bottom: 20px">
    @endif

    <div class="row">
        <div class="col-md-12">
            @php
            echo $minatbakat->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
