@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

<table class="table table-bordered table-stripped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Link</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=1;
        @endphp
        @foreach($blog_siswa as $value)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->judul }}</td>
            <td>{{ $value->link }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
