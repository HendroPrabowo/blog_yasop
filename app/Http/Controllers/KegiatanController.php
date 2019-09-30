<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ekstrakurikuler;
use App\Lainnya;
use App\MinatBakat;
use App\Rutinitas;

class KegiatanController extends Controller
{
    public function ekstrakurikuler(){
        $ekstrakurikuler = Ekstrakurikuler::first();
        return view('kegiatan.ekstrakurikuler', ['ekstrakurikuler' => $ekstrakurikuler]);
    }

    public function lainnya(){
        $lainnya = Lainnya::first();
        return view('kegiatan.lainnya', ['lainnya' => $lainnya]);
    }

    public function minatbakat(){
        $minatbakat = MinatBakat::first();
        return view('kegiatan.minatbakat', ['minatbakat' => $minatbakat]);
    }

    public function rutinitas(){
        $rutinitas = Rutinitas::first();
        return view('kegiatan.rutinitas', ['rutinitas' => $rutinitas]);
    }
}
