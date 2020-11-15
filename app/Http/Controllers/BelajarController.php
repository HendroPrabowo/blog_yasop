<?php

namespace App\Http\Controllers;

use App\Belajar;
use App\FasilitasDeskripsi;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        $belajar = Belajar::paginate(5);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'belajar')->first();
        return view('admin.belajar.index', ['belajar' => $belajar, 'deskripsi' => $deskripsi]);
    }

    public function create()
    {
        return view('admin.belajar.create');
    }

    public function store(Request $request)
    {
        $belajar = Belajar::create([
            'text' => $request->text
        ]);

        if ($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $belajar->id . '.belajar.' . $file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/belajar/', $imageName);
            $belajar->gambar = 'belajar/' . $imageName;
            $belajar->save();
        }

        return redirect()->action('BelajarController@index');
    }

    public function show(Belajar $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $belajar = Belajar::find($id);
        return view('admin.belajar.edit', ['belajar' => $belajar]);
    }

    public function update(Request $request, $id)
    {
        $belajar = Belajar::find($id);
        $belajar->text = $request->text;
        $belajar->save();

        if ($request->pilihan_gambar == "ganti") {
            if ($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $belajar->id . '.belajar.' . $file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/belajar/', $imageName);
                $belajar->gambar = 'belajar/' . $imageName;
                $belajar->save();
            }
        } elseif ($request->pilihan_gambar == "hapus") {
            $belajar->gambar = null;
            $belajar->save();
        }

        return redirect()->action('BelajarController@index');
    }

    public function destroy($id)
    {
        Belajar::destroy($id);
        return redirect()->action('BelajarController@index');
    }

    public function editDeskripsi($id) {
        $deskripsi = FasilitasDeskripsi::find($id);
        return view('admin.belajar.deskripsi', ['deskripsi' => $deskripsi]);
    }

    public function updateDeskripsi(Request $request, $id) {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        $deskripsi = FasilitasDeskripsi::find($id);
        $deskripsi->deskripsi = $request->deskripsi;
        $deskripsi->save();
        return redirect()->action('BelajarController@index');
    }

    public function saveDeskripsi(Request $request) {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        FasilitasDeskripsi::create([
            'fasilitas' => 'belajar',
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->action('BelajarController@index');
    }

    public function createDeskripsi() {
        return view('admin.belajar.deskripsicreate');
    }
}
