@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">
    <h1>Staf Pengajar</h1>
</div>

<div class="container">
    <table class="table table-striped table-bordered">
        <thead>
        <tr class="d-flex">
            <th class="col-1 text-center">No</th>
            <th class="col-4 text-center">Gambar</th>
            <th class="col-7 text-center">Keterangan</th>
        </tr>
        </thead>
        <tbody>
        @foreach($staf_pengajar as $val)
            <tr class="d-flex">
                <td class="col-1 text-center">{{ $val->id }}</td>
                <td class="col-4">
                    <img class="rounded mx-auto d-block" src="{{ asset('storage/'.$val->gambar) }}" style="height: 4cm; width: 3cm">
                </td>
                <td class="col-7">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <p class="font-weight-bold" style="font-size: x-large">{{ $val->nama }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="font-weight-bold" style="font-size: medium">{{ $val->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
