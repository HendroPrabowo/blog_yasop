@extends('layouts.layout')

@section('breadcrumb_title')
<h1>IT</h1>
@endsection

@section('breadcrumb_list')
<li class="active">IT</li>
@endsection

@section('content')
    <div>
        <h3>IT</h3>
    </div>
    @if(is_null($it))
    <a href="/it/create" class="btn btn-success" style="margin: 10px 0px">Tambah IT</a>
    @else
    <a href="/it/{{ $it->id }}/edit" class="btn btn-success" style="margin: 10px 0px">Edit IT</a>

    <div class="row">
        <div class="col-md-12">
            @php
            echo $it->text;
            @endphp
        </div>
    </div>
    @endif
@endsection
