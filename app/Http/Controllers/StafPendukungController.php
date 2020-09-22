<?php

namespace App\Http\Controllers;

use App\StafPendukung;
use Illuminate\Http\Request;

class StafPendukungController extends Controller
{
    public function index()
    {
        $staf_pendukung = StafPendukung::all();
        return view('admin.staf_pendukung.index', ['staf_pendukung' => $staf_pendukung]);
    }

    public function create()
    {
        return view('admin.staf_pendukung.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required'
        ]);

        $staf_pendukung = StafPendukung::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $staf_pendukung->id.'.staf_pendukung.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/staf_pendukung/', $imageName);
            $staf_pendukung->gambar = 'staf_pendukung/'.$imageName;
            $staf_pendukung->save();
        }

        return redirect()->action('StafPendukungController@index');
    }

    public function show(StafPendukung $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $staf_pendukung = StafPendukung::find($id);
        return view('admin.staf_pendukung.edit', ['staf_pendukung' => $staf_pendukung]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required'
        ]);

        $staf_pendukung = StafPendukung::find($id);
        $staf_pendukung->nama = $request->nama;
        $staf_pendukung->jabatan = $request->jabatan;
        $staf_pendukung->save();

        if ($request->pilihan_gambar == "ganti") {
            if($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $staf_pendukung->id.'.staf_pendukung.'.$file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/staf_pendukung/', $imageName);
                $staf_pendukung->gambar = 'staf_pendukung/'.$imageName;
                $staf_pendukung->save();
            }
        }
        return redirect()->action('StafPendukungController@index');
    }

    public function destroy($id)
    {
        StafPendukung::destroy($id);
        return redirect()->action('StafPendukungController@index');
    }
}
