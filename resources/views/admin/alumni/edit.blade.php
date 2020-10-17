@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Edit Alumni</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Edit Alumni</li>
@endsection

@section('content')
    <h3>Alumni</h3>
        <div class="card-body card-block">
            <form action="{{ url('/alumni/'.$alumni->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @error('alumni')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="posting">Nama</label>
                    <input name="nama" class="form-control" value="{{ $alumni->nama }}">
                </div>
                @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="submit" name="submit" value="Edit" combak class="btn btn-success">
            </form>
        </div>
@endsection
