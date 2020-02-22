@extends('layouts.layout')

@section('breadcrumb_title')
    <h1>Semua Postingan</h1>
@endsection

@section('breadcrumb_list')
    <li class="active">Postingan</li>
@endsection

@section('content')
    <h3>Semua Postingan</h1>

    <a href="{{ url('/post/create') }}" class="btn btn-primary">Tambah Postingan</a>

    <table class="table table-striped table-bordered" style="margin-top: 10px">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <!-- <th>Path</th> -->
                <th>Preview Gambar</th>
                <th>Isi</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($post as $value)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $value->judul }}</td>
                    <!-- <td>{{ $value->gambar }}</td> -->
                    <td><img src="{{ asset('storage/'.$value->gambar) }}" alt="gambar" style="height: 100px; width: 100px"></td>
                    <td><?php echo $value->posting ?></td>
                    <td>
                        @if($value->kategori == null)
                            Tidak Berkategori
                        @else
                            {{ $value->kategori->kategori }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('/post/'.$value->id.'/edit') }}" class="btn btn-primary fa fa-pencil fa-lg" style="float: left"></a>
                        <form method="post" action="{{ url('/post/'.$value->id) }}">
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
