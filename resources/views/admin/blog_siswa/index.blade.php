@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Daftar Blog Blog Siswa</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Daftar Blog Blog Siswa</li>
@endsection

@section('content')
    <div>
        <h3>Daftar Blog Blog Siswa</h3>
    </div>

    <a href="blog_siswa/create" class="btn btn-success" style="margin: 10px 0px">Tambah Blog Siswa</a>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
            @foreach($blog_siswa as $value)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->judul }}</td>
                    <td>{{ $value->link }}</td>
                    <td>
                        <a href="/blog_siswa/{{ $value->id }}/edit" class="btn btn-primary fa fa-pencil fa-lg" style="float: left"></a>
                        <form method="post" action="/blog_siswa/{{ $value->id }}">
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
