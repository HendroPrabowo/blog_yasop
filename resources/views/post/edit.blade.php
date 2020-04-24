@extends('layouts.layout')

@section('head')
<script src="{{ asset('/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: '#mytextarea',
        // menubar: false,
    });
</script>
@endsection

@section('breadcrumb_title')
<h1>Tambah Postingan</h1>
@endsection

@section('breadcrumb_list')
<li><a href="/post">Postingan</a></li>
<li class="active">Tambah Postingan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah</strong> Postingan
        </div>
        <div class="card-body card-block">
            <form action="{{ url('/post/'.$post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" value="{{ $post->judul }}" class="form-control">
                </div>
                @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="posting">Postingan</label>
                    <textarea name="posting" rows=15 class="form-control" id="mytextarea">{{ $post->posting }}</textarea>
                </div>
                <!-- <div class="form-group">
                    <label for="posting">Postingan</label>
                    <textarea name="posting" class="form-control">{{ $post->posting }}</textarea>
                </div> -->
                @error('posting')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <!-- <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" value="{{ old('kategori') }}" class="form-control">
                </div> -->

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" name="kategori">
                        <option value="">Tak Berkategori</option>
                        @foreach($kategori as $value)
                            @if($value->id === $post->kategori_id)
                                <option value="{{ $value->id }}" selected>{{ $value->kategori }}</option>
                            @else
                                <option value="{{ $value->id }}">{{ $value->kategori }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="kategori">Gambar</label>
                    <input type="file" name="gambar" value="{{ old('gambar') }}" class="form-control">
                </div>
                @error('gambar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" name="submit" value="Edit" combak class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection

@section('foot')
@endsection
