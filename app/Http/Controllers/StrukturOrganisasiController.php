<?php

namespace App\Http\Controllers;

use App\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $struktur_organisasi = StrukturOrganisasi::first();
        return view('admin.struktur_organisasi.index', ['struktur_organisasi' => $struktur_organisasi]);
    }

    public function create()
    {
        $struktur_organisasi = StrukturOrganisasi::all();
        if(sizeof($struktur_organisasi) >= 1){
            return redirect()->action('StrukturOrganisasiController@index');
        }

        return view('admin.struktur_organisasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $struktur_organisasi = StrukturOrganisasi::create([
            'text' => $request->text
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $struktur_organisasi->id.'.struktur_organisasi.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/struktur_organisasi/', $imageName);
            $struktur_organisasi->gambar = 'struktur_organisasi/'.$imageName;
            $struktur_organisasi->save();
        }

        return redirect()->action('StrukturOrganisasiController@index');
    }

    public function show(StrukturOrganisasi $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $struktur_organisasi = StrukturOrganisasi::find($id);
        return view('admin.struktur_organisasi.edit', ['struktur_organisasi' => $struktur_organisasi]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $struktur_organisasi = StrukturOrganisasi::find($id);
        $struktur_organisasi->text = $request->text;
        $struktur_organisasi->save();

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $struktur_organisasi->id.'.struktur_organisasi.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/struktur_organisasi/', $imageName);
            $struktur_organisasi->gambar = 'struktur_organisasi/'.$imageName;
            $struktur_organisasi->save();
        }

        return redirect()->action('StrukturOrganisasiController@index');
    }

    public function destroy(StrukturOrganisasi $kepalaAsrama)
    {
        //
    }
}
