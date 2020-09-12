@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Staf Pendukung</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Staf Pendukung</li>
@endsection

@section('content')
    <div>
        <h3>Staf Pendukung</h3>
    </div>

    <a href="{{ url('/staf_pendukung/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Staf Pendukung</a>

    <div class="container-fluid">
        <table class="table table-striped table-bordered">
            <thead>
            <tr class="d-flex">
                <th class="col-1 text-center">No</th>
                <th class="col-3 text-center">Gambar</th>
                <th class="col-6 text-center">Keterangan</th>
                <th class="col-2 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($staf_pendukung as $val)
                <tr class="d-flex">
                    <td class="col-1 text-center">{{ $val->id }}</td>
                    <td class="col-3">
                        <img class="rounded mx-auto d-block" src="{{ asset('storage/'.$val->gambar) }}" style="height: 4cm; width: 3cm">
                    </td>
                    <td class="col-6">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <p class="font-weight-bold" style="font-size: x-large">{{ $val->nama }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-weight-bold" style="font-size: medium">{{ $val->jabatan }}</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="col-2">
                        <a href="{{ url('/staf_pendukung/'.$val->id.'/edit') }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('/staf_pendukung/'.$val->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
