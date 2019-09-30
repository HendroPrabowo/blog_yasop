@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Daftar Siswa</h1>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>No Induk</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
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
        </tr>
        @php
        $i++;
        @endphp
    @endforeach
    </tbody>
</table>

@endsection
