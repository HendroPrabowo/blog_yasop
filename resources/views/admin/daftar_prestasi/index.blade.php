@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Daftar Prestasi</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Daftar Prestasi</li>
@endsection

@section('content')
    <div>
        <h3>Daftar Prestasi</h3>
    </div>

    <a href="{{ url('daftar_prestasi/create') }}" class="btn btn-success" style="margin: 10px 0px">Tambah Prestasi</a>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Prestasi</th>
                        <th>Siswa</th>
                        <th>Berita</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
            @foreach($daftar_prestasi as $value)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $value->prestasi }}</td>
                    <td>{{ $value->siswa }}</td>
                    <td>{{ $value->berita }}</td>
                    <td>
                        <a href="{{ url('/daftar_prestasi/'.$value->id.'/edit') }}" class="btn btn-primary fa fa-pencil fa-lg" style="float: left"></a>
                        <form method="post" action="{{ url('/daftar_prestasi/'.$value->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger fa fa-trash fa-lg">
                            </button>
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
    </div>
@endsection
