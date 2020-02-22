@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Sosial</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Sosial</li>
@endsection

@section('content')
    <div>
        <h3>Sosial</h3>
    </div>
    @if(is_null($sosial))
    <a href="{{ url('/sosial/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Sosial</a>
    @else
    <a href="{{ url('/sosial/'.$sosial->id.'/edit') }}" class="btn btn-success" style="margin: 10px 0px">Edit Sosial</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $sosial->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
