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
    <a href="/minatbakat/create" class="btn btn-success" style="margin: 10px 0px">Tambah Minat Bakat</a>
    @else
    <a href="/minatbakat/{{ $minatbakat->id }}/edit" class="btn btn-success" style="margin: 10px 0px">Edit Minat Bakat</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $minatbakat->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
