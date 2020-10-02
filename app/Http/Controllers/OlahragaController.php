<?php

namespace App\Http\Controllers;

use App\Olahraga;
use Illuminate\Http\Request;

class OlahragaController extends Controller
{
    public function index()
    {
        $olahraga = Olahraga::paginate(5);
        return view('admin.olahraga.index', ['olahraga' => $olahraga]);
    }

    public function create()
    {
        return view('admin.olahraga.create');
    }

    public function store(Request $request)
    {
        $olahraga = Olahraga::create([
            'text' => $request->text
        ]);

        if ($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $olahraga->id . '.olahraga.' . $file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/olahraga/', $imageName);
            $olahraga->gambar = 'olahraga/' . $imageName;
            $olahraga->save();
        }

        return redirect()->action('OlahragaController@index');
    }

    public function show(Olahraga $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $olahraga = Olahraga::find($id);
        return view('admin.olahraga.edit', ['olahraga' => $olahraga]);
    }

    public function update(Request $request, $id)
    {
        $olahraga = Olahraga::find($id);
        $olahraga->text = $request->text;
        $olahraga->save();

        if ($request->pilihan_gambar == "ganti") {
            if ($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $olahraga->id . '.olahraga.' . $file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/olahraga/', $imageName);
                $olahraga->gambar = 'olahraga/' . $imageName;
                $olahraga->save();
            }
        } elseif ($request->pilihan_gambar == "hapus") {
            $olahraga->gambar = null;
            $olahraga->save();
        }

        return redirect()->action('OlahragaController@index');
    }

    public function destroy($id)
    {
        Olahraga::destroy($id);
        return redirect()->action('OlahragaController@index');
    }
}
