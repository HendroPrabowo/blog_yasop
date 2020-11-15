@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Edit Deskirpsi</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Edit Deskripsi</li>
@endsection

@section('content')
    <h3>Deskripsi</h3>

    <form action="{{ url('/itRoute/edit/'.$deskripsi->id) }}" method="post">
        @csrf
        @error('deskripsi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="posting">Deskripsi</label>
            <textarea name="deskripsi" rows=4 class="form-control">{{ $deskripsi->deskripsi }}</textarea>
        </div>
        <input type="submit" name="submit" value="Submit" combak class="btn btn-success">
    </form>
@endsection
