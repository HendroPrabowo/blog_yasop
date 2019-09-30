@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Edit Kategori</h1>
@endsection

@section('breadcrumb_list')
<li><a href="/$kategori">Kategori</a></li>
<li class="active">Edit Kategori</li>
@endsection

@section('content')
    <h3>Edit Kategori</h3>

    <div class="card col-md-6" style="margin-top:10px">
        <div class="card-header">
            <strong>Edit</strong> Kategori
        </div>
        <div class="card-body card-block">
            <form action="/kategori/{{ $kategori->id }}" method="post" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="row form-group mb-2">
                    <div class="col col-md-8">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-bookmark"></i></div>
                            <input type="text" name="kategori" class="form-control" value="{{ $kategori->kategori }}" required>
                        </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-success mb-2">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
