<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use App\Alumni;
use App\Artikel;

class HomeController extends Controller
{
    private $kataSambutanPath         = "/configurable/kata-sambutan.json";

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $listAgenda = $this->getAgenda();
        $listAlumni = $this->getAlumni();
        $listArtikel = $this->getArtikel();
        $listKegiatan = $this->getKegiatan();
        $kontenKataSambutan = $this->getKataSambutan();    
        return view('client.beranda', compact('kontenKataSambutan', 'listAgenda', 'listAlumni', 'listArtikel', 'listKegiatan'));
    }

    public function getAgenda(){
        // filter out 4 based on month and ASC
        return Agenda::all();
    }

    public function getAlumni(){
        return Alumni::all();
    }

    public function getArtikel(){
        return Artikel::where('kategori', '!=', 'kegiatan')->orderBy('id','desc')->take(4)->get()->toArray();
    }

    public function getKegiatan(){
        return Artikel::where('kategori', '=', 'kegiatan')->orderBy('id','desc')->take(4)->get()->toArray();
        // last 4
        
    }

    public function getKataSambutan(){
        $kataSambutan = file_get_contents(__DIR__ . $this->kataSambutanPath);
        return json_decode($kataSambutan, true);
    }
}
