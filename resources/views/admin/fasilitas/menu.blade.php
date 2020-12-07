@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>{{ $fasilitas_menu->nama_menu }}</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">{{ $fasilitas_menu->nama_menu }}</li>
@endsection

@section('content')
    <div>
        <h3>{{ $fasilitas_menu->nama_menu }}</h3>
    </div>

    <div class="card" style="margin-top: 20px">
        <div class="card-header">
            {{ $fasilitas_menu->nama_menu }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $fasilitas_menu->deskripsi }}</h5>
            <a href="{{ url('/fasilitasmenu/edit/'.$fasilitas_menu->id) }}" class="btn btn-primary">Edit
                Menu {{ $fasilitas_menu->nama_menu }}</a>
            <a href="{{ url('/fasilitasmenu/delete/'.$fasilitas_menu->id) }}" class="btn btn-danger">Hapus
                Menu {{ $fasilitas_menu->nama_menu }}</a>
        </div>
    </div>

    <div class="container-fluid">
        <a href="{{ url('/fasilitasmenu/item/'.$fasilitas_menu->id) }}" class="btn btn-primary" style="margin-bottom: 10px">Tambah Item</a>
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
            @foreach($fasilitas_gambar as $val)
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
                        <a href="{{ url('/fasilitasmenu/item/edit/'.$val->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('/fasilitasmenu/item/delete/'.$val->id) }}" method="POST">
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
                <div class="col-sm">{{ $fasilitas_gambar->links() }}</div>
                <div class="col-sm"></div>
            </div>
        </div>
    </div>
@endsection
