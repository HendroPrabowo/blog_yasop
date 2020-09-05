@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Prestasi</th>
            <th>Siswa</th>
            <th>Berita</th>
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
        </tr>
        @php
        $i++;
        @endphp
    @endforeach
    </tbody>
</table>

@endsection
