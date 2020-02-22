@extends('layouts.layout')

@section('breadcrumb_title')
<h1>Kategori</h1>
@endsection

@section('breadcrumb_list')
<li class="active">Kategori</li>
@endsection

@section('content')
    <h3>Semua Kategori</h1>

    <!-- <a href="/kategori/create" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Tambah</a> -->

    <div class="card col-md-6" style="margin-top:10px">
        <div class="card-header">
            <strong>Tambah</strong> Kategori
        </div>
        <div class="card-body card-block">
            <form action="{{ url('/kategori') }}" method="post" class="form-horizontal">
                @csrf
                <div class="row form-group mb-2">
                    <div class="col col-md-8">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-bookmark"></i></div>
                            <input type="text" name="kategori" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-success mb-2">Tambah</button>
                </div>
            </form>
        </div>
    </div>


    <table class="table table-striped table-bordered col-md-6" style="margin-top: 10px">
        <thead>
            <tr>
                <th>#</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($kategori as $value)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $value->kategori }}</td>
                    <td>
                        <a href="{{ url('/kategori/'.$value->id.'/edit') }}" class="btn btn-primary fa fa-pencil fa-lg" style="float: left"></a>
                        <form method="post" action="{{ url('/kategori/'.$value->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger fa fa-trash fa-lg">
                            </button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            @endforeach
        </tbody>
    </table>

@endsection
