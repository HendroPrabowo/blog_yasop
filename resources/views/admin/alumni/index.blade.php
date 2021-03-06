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

    <div class="container" style="margin-bottom: 20px">
        <h3><center>Semua Angkatan</center></h3>
    </div>

    <div class="container-fluid">
        <table class="table table-striped table-bordered">
            <thead>
            <tr class="d-flex">
                <th class="col-1 text-center">No</th>
                <th class="col-8 text-center">Angkatan</th>
                <th class="col-3 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($angkatan as $val)
                <tr class="d-flex">
                    <td class="col-1 text-center">{{ $i }}</td>
                    <td class="col-8">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <p class="font-weight-bold" style="font-size: x-large">{{ $val->nama_angkatan }}</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="col-3">
                        <a href="{{ url('/alumni/'.$val->id) }}" class="btn btn-success btn-sm">View</a>
                        <form action="{{ url('/alumniRoute/deleteAngkatan/'.$val->id) }}" method="POST">
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
