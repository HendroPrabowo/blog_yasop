<?php

namespace App\Http\Controllers;

use App\OrganisasiSiswa;
use Illuminate\Http\Request;

class OrganisasiSiswaController extends Controller
{
    public function index()
    {
        $organisasi_siswa = OrganisasiSiswa::first();
        return view('admin.organisasi_siswa.index', ['organisasi_siswa' => $organisasi_siswa]);
    }

    public function create()
    {
        $organisasi_siswa = OrganisasiSiswa::all();
        if(sizeof($organisasi_siswa) >= 1){
            return redirect()->action('OrganisasiSiswaController@index');
        }

        return view('admin.organisasi_siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $organisasi_siswa = OrganisasiSiswa::create([
            'text' => $request->text
        ]);

        return redirect()->action('OrganisasiSiswaController@index');
    }

    public function show(OrganisasiSiswa $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $organisasi_siswa = OrganisasiSiswa::find($id);
        return view('admin.organisasi_siswa.edit', ['organisasi_siswa' => $organisasi_siswa]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $organisasi_siswa = OrganisasiSiswa::find($id);
        $organisasi_siswa->text = $request->text;
        $organisasi_siswa->save();
        return redirect()->action('OrganisasiSiswaController@index');
    }

    public function destroy(OrganisasiSiswa $kepalaAsrama)
    {
        //
    }
}
