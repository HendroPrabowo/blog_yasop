@extends('layouts_blog.layout')

@section('isi')
    <div class="header" style="margin-top: 50px">
        <center><h1 style="font-family: 'Times New Roman'">Alumni</h1></center>
    </div>
    <br>

    <form action="{{ url('/kesiswaan/alumniByAngkatan') }}" method="post">
        @csrf
        <label><b>Pilih Angkatan</b></label>
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <select class="form-control" name="angkatan_id">
                        @foreach($angkatan as $val)
                            <option value="{{ $val->id }}">{{ $val->nama_angkatan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="btn btn-primary" value="Pilih">
            </div>
        </div>
    </form>

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
