<?php

namespace App\Http\Controllers;

use App\FasilitasDeskripsi;
use App\Sosial;
use Illuminate\Http\Request;

class SosialController extends Controller
{
    public function index()
    {
        $sosial = Sosial::paginate(5);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'sosial')->first();
        return view('admin.sosial.index', ['sosial' => $sosial, 'deskripsi' => $deskripsi]);
    }

    public function create()
    {
        return view('admin.sosial.create');
    }

    public function store(Request $request)
    {
        $sosial = Sosial::create([
            'text' => $request->text
        ]);

        if ($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $sosial->id . '.sosial.' . $file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/sosial/', $imageName);
            $sosial->gambar = 'sosial/' . $imageName;
            $sosial->save();
        }

        return redirect()->action('SosialController@index');
    }

    public function show(Sosial $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $sosial = Sosial::find($id);
        return view('admin.sosial.edit', ['sosial' => $sosial]);
    }

    public function update(Request $request, $id)
    {
        $sosial = Sosial::find($id);
        $sosial->text = $request->text;
        $sosial->save();

        if ($request->pilihan_gambar == "ganti") {
            if ($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $sosial->id . '.sosial.' . $file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/sosial/', $imageName);
                $sosial->gambar = 'sosial/' . $imageName;
                $sosial->save();
            }
        } elseif ($request->pilihan_gambar == "hapus") {
            $sosial->gambar = null;
            $sosial->save();
        }

        return redirect()->action('SosialController@index');
    }

    public function destroy($id)
    {
        Sosial::destroy($id);
        return redirect()->action('SosialController@index');
    }

    public function editDeskripsi($id) {
        $deskripsi = FasilitasDeskripsi::find($id);
        return view('admin.sosial.deskripsi', ['deskripsi' => $deskripsi]);
    }

    public function updateDeskripsi(Request $request, $id) {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        $deskripsi = FasilitasDeskripsi::find($id);
        $deskripsi->deskripsi = $request->deskripsi;
        $deskripsi->save();
        return redirect()->action('SosialController@index');
    }

    public function saveDeskripsi(Request $request) {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        FasilitasDeskripsi::create([
            'fasilitas' => 'sosial',
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->action('SosialController@index');
    }

    public function createDeskripsi() {
        return view('admin.sosial.deskripsicreate');
    }
}
