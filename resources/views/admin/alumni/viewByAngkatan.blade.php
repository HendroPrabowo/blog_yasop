@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Alumni</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Alumni</li>
@endsection

@section('content')
    <div>
        <h3>Alumni</h3>
    </div>

    <table class="table">
        <tr class="d-flex">
            <td class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Upload Excel</b></h5>
                        <form action="{{ url('/alumni') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="excel">File</label>
                                <input type="file" name="excel" value="{{ old('excel') }}" class="form-control">
                            </div>
                            @error('excel')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="submit" name="submit" value="Upload" combak class="btn btn-success">
                        </form>
                    </div>
                </div>
            </td>
            <td class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Download Template Excel</b></h5>
                        <a href="{{ url('/template/alumni')  }}" class="btn btn-primary">Download Template</a>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <table class="table">
        <tr class="d-flex">
            <td class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Pilih Angkatan</b></h5>
                        <div class="container">
                            <form action="{{ url('/alumniRoute/getByAngkatan') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <select class="form-control" name="nama_angkatan">
                                                @foreach($angkatan as $val)
                                                    <option value="{{ $val->id }}">{{ $val->nama_angkatan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" class="btn btn-primary" value="Pilih">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </td>
            <td class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Hapus Angkatan</b></h5>
                        <div class="container">
                            <form action="{{ url('/alumniRoute/deleteByAngkatan') }}" method="post">
{{--                                @method('DELETE')--}}
                                @csrf
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <select class="form-control" name="nama_angkatan">
                                                @foreach($angkatan as $val)
                                                    <option value="{{ $val->id }}">{{ $val->nama_angkatan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" class="btn btn-danger" value="Hapus">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <div class="container" style="margin-bottom: 20px">
        <h3><center>{{ $angkatan_aktif }}</center></h3>
    </div>

    <div class="container-fluid">
        <table class="table table-striped table-bordered">
            <thead>
            <tr class="d-flex">
                <th class="col-1 text-center">No</th>
                <th class="col-9 text-center">Nama</th>
                <th class="col-2 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($alumni as $val)
                <tr class="d-flex">
                    <td class="col-1 text-center">{{ $i }}</td>
                    <td class="col-9">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <p class="font-weight-bold" style="font-size: x-large">{{ $val->nama }}</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="col-2">
                        <a href="{{ url('/alumni/'.$val->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ url('/alumni/'.$val->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
