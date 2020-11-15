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
        @if($deskripsi != null)
            <p>{{ $deskripsi->deskripsi }}</p>
            <a href="{{ url('/sosialRoute/edit/'.$deskripsi->id) }}" class="btn btn-success">Ubah Deskripsi</a>
        @else
            <a href="{{ url('/sosialRoute/deskripsicreate') }}" class="btn btn-success">Tambah Deskripsi</a>
        @endif
    </div>

    <a href="{{ url('/sosial/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Sosial</a>

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
            @foreach($sosial as $val)
                <tr class="d-flex">
                    <td class="col-1 text-center">{{ $i }}</td>
                    <td class="col-3">
                        @if($val->gambar != null)
                            <img class="rounded mx-auto d-block" src="{{ asset('storage/'.$val->gambar) }}" style="height: 4cm; width: 3cm">
                        @else
                            <img class="rounded mx-auto d-block" src="{{ asset('image/logo/user.svg')  }}" style="height: 4cm; width: 3cm">
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
                        <a href="{{ url('/sosial/'.$val->id.'/edit') }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('/sosial/'.$val->id) }}" method="POST">
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
                <div class="col-sm">{{ $sosial->links() }}</div>
                <div class="col-sm"></div>
            </div>
        </div>
    </div>
@endsection
