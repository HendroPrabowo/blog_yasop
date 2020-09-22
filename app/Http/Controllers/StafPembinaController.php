<?php

namespace App\Http\Controllers;

use App\StafPembina;
use Illuminate\Http\Request;

class StafPembinaController extends Controller
{
    public function index()
    {
        $staf_pembina = StafPembina::all();
        return view('admin.staf_pembina.index', ['staf_pembina' => $staf_pembina]);
    }

    public function create()
    {
        return view('admin.staf_pembina.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required'
        ]);

        $staf_pembina = StafPembina::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $staf_pembina->id.'.staf_pembina.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/staf_pembina/', $imageName);
            $staf_pembina->gambar = 'staf_pembina/'.$imageName;
            $staf_pembina->save();
        }

        return redirect()->action('StafPembinaController@index');
    }

    public function show(StafPembina $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $staf_pembina = StafPembina::find($id);
        return view('admin.staf_pembina.edit', ['staf_pembina' => $staf_pembina]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required'
        ]);

        $staf_pembina = StafPembina::find($id);
        $staf_pembina->nama = $request->nama;
        $staf_pembina->jabatan = $request->jabatan;
        $staf_pembina->save();

        if ($request->pilihan_gambar == "ganti") {
            if($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $staf_pembina->id.'.staf_pembina.'.$file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/staf_pembina/', $imageName);
                $staf_pembina->gambar = 'staf_pembina/'.$imageName;
                $staf_pembina->save();
            }
        }
        return redirect()->action('StafPembinaController@index');
    }

    public function destroy($id)
    {
        StafPembina::destroy($id);
        return redirect()->action('StafPembinaController@index');
    }
}
