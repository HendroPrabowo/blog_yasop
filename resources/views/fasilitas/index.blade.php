@extends('layouts_blog.layout')

@section('isi')
    <div class="header" style="margin-top: 50px">
        <center><h1 style="font-family: 'Times New Roman'">{{ $fasilitas_menu_2->nama_menu }}</h1></center>
    </div>
    @if($fasilitas_menu_2->deskripsi != null)
        <p>{{ $fasilitas_menu_2->deskripsi }}</p>
    @endif
    <br>

    @php
        $i = 1;
    @endphp

    <div class="container">
        @foreach($fasilitas_gambar as $val)
            @if($i % 2 != 0)
                <div class="row">
                    <div class="col-sm-6">
                        @if($val->gambar != null)
                            <center><img src="{{ asset('storage/'.$val->gambar) }}"
                                         style="max-width: 100%; max-height: 100%; width: 400px; height: 300px;">
                            </center>
                        @endif
                        @if($val->text != null)
                            <p style="text-align: center">{{ $val->text }}</p>
                        @endif
                    </div>
            @else
                    <div class="col-sm-6">
                        @if($val->gambar != null)
                            <center><img src="{{ asset('storage/'.$val->gambar) }}"
                                         style="max-width: 100%; max-height: 100%; width: 400px; height: 300px;">
                            </center>
                        @endif
                        @if($val->text != null)
                            <p style="text-align: center">{{ $val->text }}</p>
                        @endif
                    </div>
                </div>
            @endif
            @php
                $i++;
            @endphp
        @endforeach
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">{{ $fasilitas_gambar->links() }}</div>
            <div class="col-md-5"></div>
        </div>
    </div>
@endsection
