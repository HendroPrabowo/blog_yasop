@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Alumni</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Alumni</li>
@endsection

@section('content')
    <div style="margin-bottom: 20px">
        <center><h3>Angkatan : {{ $angkatan }}</h3></center>
    </div>

    <div class="container-fluid">
        <table class="table table-striped table-bordered">
            <thead>
            <tr class="d-flex">
                <th class="col-1 text-center">No</th>
                <th class="col-9 text-center">Nama</th>
                <th class="col-2 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($alumni as $val)
                <tr class="d-flex">
                    <td class="col-1 text-center">{{ $i }}</td>
                    <td class="col-9">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <p class="font-weight-bold" style="font-size: x-large">{{ $val->nama }}</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="col-2">
                        <a href="{{ url('/alumni/'.$val->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ url('/alumni/'.$val->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
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
@endsection
