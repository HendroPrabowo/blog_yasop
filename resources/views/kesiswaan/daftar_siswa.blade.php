@extends('layouts_blog.layout')

@section('isi')
    <style>
        .gambar-latar{}
        div.gambar-latar > img {
            opacity: 0.1;
            position: fixed;
            margin: auto auto;
            left: 0;
            right: 0;
            height: 90%;
        }
    </style>
    <div class="gambar-latar">
        <img src="{{ asset('image/logo/yayasan_soposurung_logo.png') }}">
    </div>

    <div class="header" style="margin-top: 50px">
        <center><h1 style="font-family: 'Times New Roman'">Daftar Siswa</h1></center>
    </div>

    <select class="form-control" id="kelas">
        @if($kelas == 'X')
            <option value="X" selected>X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        @elseif($kelas == 'XI')
            <option value="X">X</option>
            <option value="XI" selected>XI</option>
            <option value="XII">XII</option>
        @else
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII" selected>XII</option>
        @endif
    </select>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#kelas').change(function(){
                window.location.href = document.getElementById('kelas').value;
            });
        });
    </script>

    <div style="margin-top: 20px; margin-bottom: 20px; font-family: 'Times New Roman'">
        <h3><center>Kelas : {{ $kelas }}</center></h3>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>No</th>
{{--            <th>No Induk</th>--}}
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
{{--                <td>{{ $value->no_induk }}</td>--}}
                <td>{{ $value->nama }}</td>
                <td>{{ $value->kelas }}</td>
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
            <div class="col-md-2">{{ $daftar_siswa->links() }}</div>
            <div class="col-md-5"></div>
        </div>
    </div>

@endsection
