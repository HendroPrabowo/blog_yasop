@extends('layouts_blog.layout')

@section('isi')
    <div class="header" style="margin-top: 50px">
        <center><h1 style="font-family: 'Times New Roman'">Alumni</h1></center>
    </div>
    <br>

    <select class="form-control" id="id_angkatan">
        @if($angkatan_terpilih == 'semuaAngkatan')
            <option value="semuaAngkatan">Semua Angkatan</option>
        @else
            <option  value="semuaAngkatan" selected>Semua Angkatan</option>
        @endif
        @foreach($angkatan as $val)
            @if($val->nama_angkatan == $angkatan_terpilih)
                <option selected value="{{ $val->id }}">{{ $val->nama_angkatan }}</option>
            @else
                <option value="{{ $val->id }}">{{ $val->nama_angkatan }}</option>
            @endif
        @endforeach
    </select>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#id_angkatan').change(function(){
                window.location.href = document.getElementById('id_angkatan').value;
            });
        });
    </script>

    <div style="margin-top: 20px; margin-bottom: 20px
">
        <h3><center>Angkatan : {{ $angkatan_terpilih }}</center></h3>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Alumni</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1;
        @endphp
        @foreach($alumni as $value)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $value->nama }}</td>
            </tr>
            @php
                $i++;
            @endphp
        @endforeach
        </tbody>
    </table>

    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">{{ $alumni->links() }}</div>
            <div class="col-md-5"></div>
        </div>
    </div>

@endsection