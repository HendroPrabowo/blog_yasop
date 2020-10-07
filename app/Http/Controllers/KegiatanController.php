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
        $ekstrakurikuler = Ekstrakurikuler::paginate(6);
        return view('kegiatan.ekstrakurikuler', ['ekstrakurikuler' => $ekstrakurikuler]);
    }

    public function lainnya(){
        $lainnya = Lainnya::paginate(6);
        return view('kegiatan.lainnya', ['lainnya' => $lainnya]);
    }

    public function minatbakat(){
        $minatbakat = MinatBakat::paginate(6);
        return view('kegiatan.minatbakat', ['minatbakat' => $minatbakat]);
    }

    public function rutinitas(){
        $rutinitas = Rutinitas::paginate(6);
        return view('kegiatan.rutinitas', ['rutinitas' => $rutinitas]);
    }
}
