@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Lainnya</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Lainnya</li>
@endsection

@section('content')
    <div>
        <h3>Lainnya</h3>
    </div>
    @if(is_null($lainnya))
    <a href="{{ url('/lainnya/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Lainnya</a>
    @else
    <a href="{{ url('/lainnya/'.$lainnya->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Lainnya</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $lainnya->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
