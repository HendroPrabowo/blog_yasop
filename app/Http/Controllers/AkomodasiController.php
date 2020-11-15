<?php

namespace App\Http\Controllers;

use App\Akomodasi;
use App\FasilitasDeskripsi;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class AkomodasiController extends Controller
{
    public function index()
    {
        $akomodasi = Akomodasi::paginate(5);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'akomodasi')->first();
        return view('admin.akomodasi.index', ['akomodasi' => $akomodasi, 'deskripsi' => $deskripsi]);
    }

    public function create()
    {
        return view('admin.akomodasi.create');
    }

    public function store(Request $request)
    {
        $akomodasi = Akomodasi::create([
            'text' => $request->text
        ]);

        if ($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $akomodasi->id . '.akomodasi.' . $file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/akomodasi/', $imageName);
            $akomodasi->gambar = 'akomodasi/' . $imageName;
            $akomodasi->save();
        }

        return redirect()->action('AkomodasiController@index');
    }

    public function show(Akomodasi $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $akomodasi = Akomodasi::find($id);
        return view('admin.akomodasi.edit', ['akomodasi' => $akomodasi]);
    }

    public function update(Request $request, $id)
    {
        $akomodasi = Akomodasi::find($id);
        $akomodasi->text = $request->text;
        $akomodasi->save();

        if ($request->pilihan_gambar == "ganti") {
            if ($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $akomodasi->id . '.akomodasi.' . $file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/akomodasi/', $imageName);
                $akomodasi->gambar = 'akomodasi/' . $imageName;
                $akomodasi->save();
            }
        } elseif ($request->pilihan_gambar == "hapus") {
            $akomodasi->gambar = null;
            $akomodasi->save();
        }

        return redirect()->action('AkomodasiController@index');
    }

    public function destroy($id)
    {
        Akomodasi::destroy($id);
        return redirect()->action('AkomodasiController@index');
    }

    public function editDeskripsi($id) {
        $deskripsi = FasilitasDeskripsi::find($id);
        return view('admin.akomodasi.deskripsi', ['deskripsi' => $deskripsi]);
    }

    public function updateDeskripsi(Request $request, $id) {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        $deskripsi = FasilitasDeskripsi::find($id);
        $deskripsi->deskripsi = $request->deskripsi;
        $deskripsi->save();
        return redirect()->action('AkomodasiController@index');
    }

    public function saveDeskripsi(Request $request) {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        FasilitasDeskripsi::create([
            'fasilitas' => 'akomodasi',
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->action('AkomodasiController@index');
    }

    public function createDeskripsi() {
        return view('admin.akomodasi.deskripsicreate');
    }
}
