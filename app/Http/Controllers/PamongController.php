<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KepalaAsrama;
use App\StafPembina;
use App\StafPendukung;
use App\StafPengajar;
use App\StrukturOrganisasi;

class PamongController extends Controller
{
    public function kepala_asrama(){
        $kepala_asrama = KepalaAsrama::first();
        return view('pamong.kepala_asrama', ['kepala_asrama' => $kepala_asrama]);
    }

    public function staf_pembina(){
        $staf_pembina = StafPembina::first();
        return view('pamong.staf_pembina', ['staf_pembina' => $staf_pembina]);
    }

    public function staf_pendukung(){
        $staf_pendukung = StafPendukung::first();
        return view('pamong.staf_pendukung', ['staf_pendukung' => $staf_pendukung]);
    }

    public function staf_pengajar(){
        $staf_pendukung = StafPengajar::first();
        return view('pamong.staf_pengajar', ['staf_pengajar' => $staf_pendukung]);
    }

    public function struktur_organisasi(){
        $struktur_organisasi = StrukturOrganisasi::first();
        return view('pamong.struktur_organisasi', ['struktur_organisasi' => $struktur_organisasi]);
    }
}
