<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;

class AlumniController extends Controller
{
    public function lokasi(){
        return view('client.informasi');
    }

}
