<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformasiYayasan;

class InformasiAsramaController extends Controller
{

    public function index(){
        $visi = $this->getKonten('visi');
        $misi = $this->getKonten('misi');
        $sejarah = $this->getKonten('sejarah');
        $pendiri = $this->getKonten('pendiri');
        $kontak = $this->getKonten('kontak');
        $kataPembuka = $this->getKonten('kata_pembuka');
        return view('client.informasi', compact('visi', 'misi', 'sejarah', 'pendiri', 'kontak', 'kataPembuka'));
    }

    public function getKonten($kategori){
        return InformasiYayasan::where('kategori', '=', $kategori)->get()[0]->konten;
    }

}
