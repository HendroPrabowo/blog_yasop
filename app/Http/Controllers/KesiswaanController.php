<?php

namespace App\Http\Controllers;

use App\Alumni;
use Illuminate\Http\Request;
use App\OrganisasiSiswa;
use App\DaftarSiswa;
use App\DaftarPrestasi;
use App\BlogSiswa;

class KesiswaanController extends Controller
{
    public function organisasi_siswa(){
        $organisasi_siswa = OrganisasiSiswa::first();
        return view('kesiswaan.organisasi_siswa', ['organisasi_siswa' => $organisasi_siswa]);
    }

    public function daftar_siswa(){
        $daftar_siswa = DaftarSiswa::all();
        return view('kesiswaan.daftar_siswa', ['daftar_siswa' => $daftar_siswa]);
    }

    public function daftar_prestasi(){
        $daftar_prestasi = DaftarPrestasi::all();
        return view('kesiswaan.daftar_prestasi', ['daftar_prestasi' => $daftar_prestasi]);
    }

    public function blog_siswa(){
        $kepala_asrama = BlogSiswa::all();
        return view('kesiswaan.blog_siswa', ['blog_siswa' => $kepala_asrama]);
    }

    public function alumni(){
        $kepala_asrama = Alumni::all();
        return view('kesiswaan.alumni', ['alumni' => $kepala_asrama]);
    }
}
