<?php

namespace App\Http\Controllers;

use App\KepalaAsrama;
use Illuminate\Http\Request;

class KepalaAsramaController extends Controller
{
    public function index()
    {
        $kepala_asrama = KepalaAsrama::first();
        return view('admin.kepala_asrama.index', ['kepala_asrama' => $kepala_asrama]);
    }

    public function create()
    {
        $kepala_asrama = KepalaAsrama::all();
        if(sizeof($kepala_asrama) >= 1){
            return redirect()->action('KepalaAsramaController@index');
        }

        return view('admin.kepala_asrama.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $kepala_asrama = KepalaAsrama::create([
            'text' => $request->text
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $kepala_asrama->id.'.kepala_asrama.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/kepala_asrama/', $imageName);
            $kepala_asrama->gambar = 'kepala_asrama/'.$imageName;
            $kepala_asrama->save();
        }

        return redirect()->action('KepalaAsramaController@index');
    }

    public function show(KepalaAsrama $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $kepala_asrama = KepalaAsrama::find($id);
        return view('admin.kepala_asrama.edit', ['kepala_asrama' => $kepala_asrama]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $kepala_asrama = KepalaAsrama::find($id);
        $kepala_asrama->text = $request->text;
        $kepala_asrama->save();

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $kepala_asrama->id.'.kepala_asrama.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/kepala_asrama/', $imageName);
            $kepala_asrama->gambar = 'kepala_asrama/'.$imageName;
            $kepala_asrama->save();
        }

        return redirect()->action('KepalaAsramaController@index');
    }

    public function destroy(KepalaAsrama $kepalaAsrama)
    {
        //
    }
}
