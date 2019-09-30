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

    <a href="daftar_siswa/create" class="btn btn-success" style="margin: 10px 0px">Tambah Siswa</a>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Induk</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
            @foreach($daftar_siswa as $value)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $value->no_induk }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->kelas }}</td>
                    <td>
                        <a href="/daftar_siswa/{{ $value->id }}/edit" class="btn btn-primary fa fa-pencil fa-lg" style="float: left"></a>
                        <form method="post" action="/daftar_siswa/{{ $value->id }}">
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
