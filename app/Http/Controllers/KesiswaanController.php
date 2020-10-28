<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\NamaAngkatan;
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

    public function daftar_siswa($kelas){
        $daftar_siswa = DaftarSiswa::where('kelas', $kelas)->paginate(20)->appends('kelas', $kelas);
        return view('kesiswaan.daftar_siswa', ['daftar_siswa' => $daftar_siswa, 'kelas' => $kelas]);
    }

    public function daftar_prestasi(){
        $daftar_prestasi = DaftarPrestasi::all();
        return view('kesiswaan.daftar_prestasi', ['daftar_prestasi' => $daftar_prestasi]);
    }

    public function blog_siswa(){
        $kepala_asrama = BlogSiswa::all();
        return view('kesiswaan.blog_siswa', ['blog_siswa' => $kepala_asrama]);
    }

    public function alumni($angkatan_id){
        $angkatan_terpilih = 'Semua Angkatan';
        if($angkatan_id == 'semuaAngkatan') {
            $angkatan = NamaAngkatan::all();
            $alumni = Alumni::paginate(20);
            return view('kesiswaan.alumni', ['alumni' => $alumni, 'angkatan' => $angkatan, 'angkatan_terpilih' => $angkatan_terpilih]);
        }
        $angkatan_temp = NamaAngkatan::find($angkatan_id);
        $angkatan_terpilih = $angkatan_temp->nama_angkatan;
        $angkatan = NamaAngkatan::all();
        $alumni = Alumni::where('nama_angkatan_id', $angkatan_id)->paginate(20)->appends('nama_angkatan_id', $angkatan_id);
        return view('kesiswaan.alumni', ['alumni' => $alumni, 'angkatan' => $angkatan, 'angkatan_terpilih' => $angkatan_terpilih]);
    }
}
