@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Akomodasi</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Akomodasi</li>
@endsection

@section('content')
    <div>
        <h3>Akomodasi</h3>
        @if($deskripsi != null)
            <p>{{ $deskripsi->deskripsi }}</p>
            <a href="{{ url('/akomodasiRoute/edit/'.$deskripsi->id) }}" class="btn btn-success">Ubah Deskripsi</a>
        @else
            <a href="{{ url('/akomodasiRoute/deskripsicreate') }}" class="btn btn-success">Tambah Deskripsi</a>
        @endif
    </div>

    <a href="{{ url('/akomodasi/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Akomodasi</a>

    <div class="container-fluid">
        <table class="table table-striped table-bordered">
            <thead>
            <tr class="d-flex">
                <th class="col-1 text-center">No</th>
                <th class="col-3 text-center">Gambar</th>
                <th class="col-6 text-center">Caption</th>
                <th class="col-2 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($akomodasi as $val)
                <tr class="d-flex">
                    <td class="col-1 text-center">{{ $i }}</td>
                    <td class="col-3">
                        @if($val->gambar != null)
                            <img class="rounded mx-auto d-block" src="{{ asset('storage/'.$val->gambar) }}"
                                 style="height: 4cm; width: 3cm">
                        @else
                            <img class="rounded mx-auto d-block" src="{{ asset('image/logo/user.svg')  }}"
                                 style="height: 4cm; width: 3cm">
                        @endif
                    </td>
                    <td class="col-6">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <p class="font-weight-bold" style="font-size: x-large">{{ $val->text }}</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="col-2">
                        <a href="{{ url('/akomodasi/'.$val->id.'/edit') }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('/akomodasi/'.$val->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
            </tbody>
        </table>
        <div class="container">
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">{{ $akomodasi->links() }}</div>
                <div class="col-sm"></div>
            </div>
        </div>
    </div>
@endsection
