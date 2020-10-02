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
        $akomodasi = Akomodasi::paginate(6);
        return view('fasilitas.akomodasi', ['akomodasi' => $akomodasi]);
    }

    public function belajar(){
        $belajar = Belajar::paginate(6);
        return view('fasilitas.belajar', ['belajar' => $belajar]);
    }

    public function praktikum(){
        $praktikum = Praktikum::paginate(6);
        return view('fasilitas.praktikum', ['praktikum' => $praktikum]);
    }

    public function kesehatan(){
        $kesehatan = Kesehatan::paginate(6);
        return view('fasilitas.kesehatan', ['kesehatan' => $kesehatan]);
    }

    public function it(){
        $it = It::paginate(6);
        return view('fasilitas.it', ['it' => $it]);
    }

    public function olahraga(){
        $olahraga = Olahraga::paginate(6);
        return view('fasilitas.olahraga', ['olahraga' => $olahraga]);
    }

    public function sosial(){
        $sosial = Sosial::paginate(6);
        return view('fasilitas.sosial', ['sosial' => $sosial]);
    }
}
