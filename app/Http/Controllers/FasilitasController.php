<?php

namespace App\Http\Controllers;

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
        $akomodasi = Akomodasi::first();
        return view('fasilitas.akomodasi', ['akomodasi' => $akomodasi]);
    }

    public function belajar(){
        $belajar = Belajar::first();
        return view('fasilitas.belajar', ['belajar' => $belajar]);
    }

    public function praktikum(){
        $praktikum = Praktikum::first();
        return view('fasilitas.praktikum', ['praktikum' => $praktikum]);
    }

    public function kesehatan(){
        $kesehatan = Kesehatan::first();
        return view('fasilitas.kesehatan', ['kesehatan' => $kesehatan]);
    }

    public function it(){
        $it = It::first();
        return view('fasilitas.it', ['it' => $it]);
    }

    public function olahraga(){
        $olahraga = Olahraga::first();
        return view('fasilitas.olahraga', ['olahraga' => $olahraga]);
    }

    public function sosial(){
        $sosial = Sosial::first();
        return view('fasilitas.sosial', ['sosial' => $sosial]);
    }
}
