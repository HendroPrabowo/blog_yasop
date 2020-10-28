@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Daftar Siswa</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Daftar Siswa</li>
@endsection

@section('content')
    <div>
        <h3>Daftar Siswa</h3>
    </div>

    <table class="table">
        <tr class="d-flex">
            <td class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Upload Excel</b></h5>
                        <form action="{{ url('/daftar_siswa') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="excel">File</label>
                                <input type="file" name="excel" value="{{ old('excel') }}" class="form-control">
                            </div>
                            @error('excel')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control">
                                    <option value="">Pilih 1</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                                @error('kelas')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="submit" name="submit" value="Upload" combak class="btn btn-success">
                        </form>
                    </div>
                </div>
            </td>
            <td class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Download Template Excel</b></h5>
                        <a href="{{ url('/template/daftarsiswa')  }}" class="btn btn-primary">Download Template</a>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <div style="margin-bottom: 20px">
        <center><h3>Semua Kelas</h3></center>
    </div>

    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
            <tr class="d-flex">
                <th class="col-1 text-center">No</th>
                <th class="col-8 text-center">Kelas</th>
                <th class="col-3 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr class="d-flex">
                <td class="col-1 text-center">1</td>
                <td class="col-8 text-center">X</td>
                <td class="col-3 text-center">
                    <a href="{{ url('/daftar_siswa/X') }}" class="btn-sm btn-success">View</a>
                    <a href="{{ url('/daftarSiswaRoute/kosongkanKelas/X') }}" class="btn-sm btn-danger">Kosongkan Kelas</a>
                </td>
            </tr>
            <tr class="d-flex">
                <td class="col-1 text-center">2</td>
                <td class="col-8 text-center">XI</td>
                <td class="col-3 text-center">
                    <a href="{{ url('/daftar_siswa/XI') }}" class="btn-sm btn-success">View</a>
                    <a href="{{ url('/daftarSiswaRoute/kosongkanKelas/XI') }}" class="btn-sm btn-danger">Kosongkan Kelas</a>
                </td>
            </tr>
            <tr class="d-flex">
                <td class="col-1 text-center">3</td>
                <td class="col-8 text-center">XII</td>
                <td class="col-3 text-center">
                    <a href="{{ url('/daftar_siswa/XII') }}" class="btn-sm btn-success">View</a>
                    <a href="{{ url('/daftarSiswaRoute/kosongkanKelas/XII') }}" class="btn-sm btn-danger">Kosongkan Kelas</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <table class="table table-bordered table-striped">--}}
{{--                <thead>--}}
{{--                    <tr>--}}
{{--                        <th>No</th>--}}
{{--                        <th>No Induk</th>--}}
{{--                        <th>Nama Siswa</th>--}}
{{--                        <th>Kelas</th>--}}
{{--                        <th>Action</th>--}}
{{--                    </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                    @php--}}
{{--                    $i = 1;--}}
{{--                    @endphp--}}
{{--            @foreach($daftar_siswa as $value)--}}
{{--                <tr>--}}
{{--                    <td>{{ $i }}</td>--}}
{{--                    <td>{{ $value->no_induk }}</td>--}}
{{--                    <td>{{ $value->nama }}</td>--}}
{{--                    <td>{{ $value->kelas }}</td>--}}
{{--                    <td>--}}
{{--                        <a href="{{ url('/daftar_siswa/'.$value->id.'/edit') }}" class="btn btn-primary fa fa-pencil fa-lg" style="float: left"></a>--}}
{{--                        <form method="post" action="{{ url('/daftar_siswa/'.$value->id) }}">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" name="submit" class="btn btn-danger fa fa-trash fa-lg">--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                @php--}}
{{--                $i++;--}}
{{--                @endphp--}}
{{--            @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
