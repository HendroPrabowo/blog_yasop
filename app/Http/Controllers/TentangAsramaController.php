<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visimisi;
use App\Sejarah;
use App\Pendiri;
use App\Lokasi;
use App\Kontak;

class TentangAsramaController extends Controller
{
    public function visimisi(){
        $visimisi = Visimisi::first();

        return view('tentang_asrama.visimisi', ['visimisi' => $visimisi]);
    }

    public function sejarah(){
        $sejarah = Sejarah::first();

        return view('tentang_asrama.sejarah', ['sejarah' => $sejarah]);
    }

    public function pendiri(){
        $pendiri = Pendiri::first();

        return view('tentang_asrama.pendiri', ['pendiri' => $pendiri]);
    }

    public function lokasi(){
        $lokasi = Lokasi::first();

        return view('tentang_asrama.lokasi', ['lokasi' => $lokasi]);
    }

    public function kontak(){
        $kontak = Kontak::first();

        return view('tentang_asrama.kontak', ['kontak' => $kontak]);
    }
}
