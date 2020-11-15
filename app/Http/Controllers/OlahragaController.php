<?php

namespace App\Http\Controllers;

use App\FasilitasDeskripsi;
use App\Olahraga;
use Illuminate\Http\Request;

class OlahragaController extends Controller
{
    public function index()
    {
        $olahraga = Olahraga::paginate(5);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'olahraga')->first();
        return view('admin.olahraga.index', ['olahraga' => $olahraga, 'deskripsi' => $deskripsi]);
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

    public function editDeskripsi($id) {
        $deskripsi = FasilitasDeskripsi::find($id);
        return view('admin.olahraga.deskripsi', ['deskripsi' => $deskripsi]);
    }

    public function updateDeskripsi(Request $request, $id) {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        $deskripsi = FasilitasDeskripsi::find($id);
        $deskripsi->deskripsi = $request->deskripsi;
        $deskripsi->save();
        return redirect()->action('OlahragaController@index');
    }

    public function saveDeskripsi(Request $request) {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        FasilitasDeskripsi::create([
            'fasilitas' => 'olahraga',
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->action('OlahragaController@index');
    }

    public function createDeskripsi() {
        return view('admin.olahraga.deskripsicreate');
    }
}
