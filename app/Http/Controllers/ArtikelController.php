<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    public function lokasi(){
        return view('client.artikel');
    }

}
