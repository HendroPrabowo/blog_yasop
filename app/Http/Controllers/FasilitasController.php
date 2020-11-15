<?php

namespace App\Http\Controllers;

use App\FasilitasDeskripsi;
use Illuminate\Http\Request;
use App\Akomodasi;
use App\Belajar;
use App\Praktikum;
use App\Kesehatan;
use App\It;
use App\Olahraga;
use App\Sosial;

class FasilitasController extends Controller
{
    public function akomodasi(){
        $akomodasi = Akomodasi::paginate(6);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'akomodasi')->first();
        return view('fasilitas.akomodasi', ['akomodasi' => $akomodasi, 'deskripsi' => $deskripsi]);
    }

    public function belajar(){
        $belajar = Belajar::paginate(6);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'belajar')->first();
        return view('fasilitas.belajar', ['belajar' => $belajar, 'deskripsi' => $deskripsi]);
    }

    public function praktikum(){
        $praktikum = Praktikum::paginate(6);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'praktikum')->first();
        return view('fasilitas.praktikum', ['praktikum' => $praktikum, 'deskripsi' => $deskripsi]);
    }

    public function kesehatan(){
        $kesehatan = Kesehatan::paginate(6);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'kesehatan')->first();
        return view('fasilitas.kesehatan', ['kesehatan' => $kesehatan, 'deskripsi' => $deskripsi]);
    }

    public function it(){
        $it = It::paginate(6);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'it')->first();
        return view('fasilitas.it', ['it' => $it, 'deskripsi' => $deskripsi]);
    }

    public function olahraga(){
        $olahraga = Olahraga::paginate(6);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'olahraga')->first();
        return view('fasilitas.olahraga', ['olahraga' => $olahraga, 'deskripsi' => $deskripsi]);
    }

    public function sosial(){
        $sosial = Sosial::paginate(6);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'sosial')->first();
        return view('fasilitas.sosial', ['sosial' => $sosial, 'deskripsi' => $deskripsi]);
    }
}
