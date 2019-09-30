@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Carousel</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Carousel</li>
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif

    <div class="card" style="margin-top:10px">
        <div class="card-header">
            <strong>Tambah</strong> Carousel
        </div>
        <div class="card-body card-block">
            <form action="/carousel" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label>Postingan</label>
                    <select class="form-control" name="post_id" required>
                        <option selected>Pilih Postingan</option>
                        @foreach($post as $value)
                        <option value="{{ $value->id }}">{{ $value->judul }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" name="button" class="btn btn-success">Tambah</button>
            </form>
        </div>
    </div>


    <h3>Carousel Aktif</h1><br>

    <table class="table table-bordered table-stripped">
        <thead>
            <tr>
                <th>Postingan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carousel as $value)
            <tr>
                <td>{{ $value->post->judul }}</td>
                <td>
                    <form method="post" action="/carousel/{{ $value->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger fa fa-trash fa-lg">
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
