<?php

namespace App\Http\Controllers;

use App\FasilitasDeskripsi;
use App\It;
use Illuminate\Http\Request;

class ItController extends Controller
{
    public function index()
    {
        $it = It::paginate(5);
        $deskripsi = FasilitasDeskripsi::where('fasilitas', 'it')->first();
        return view('admin.it.index', ['it' => $it, 'deskripsi' => $deskripsi]);
    }

    public function create()
    {
        return view('admin.it.create');
    }

    public function store(Request $request)
    {
        $it = It::create([
            'text' => $request->text
        ]);

        if ($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $it->id . '.it.' . $file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/it/', $imageName);
            $it->gambar = 'it/' . $imageName;
            $it->save();
        }

        return redirect()->action('ItController@index');
    }

    public function show(It $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $it = It::find($id);
        return view('admin.it.edit', ['it' => $it]);
    }

    public function update(Request $request, $id)
    {
        $it = It::find($id);
        $it->text = $request->text;
        $it->save();

        if ($request->pilihan_gambar == "ganti") {
            if ($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $it->id . '.it.' . $file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/it/', $imageName);
                $it->gambar = 'it/' . $imageName;
                $it->save();
            }
        } elseif ($request->pilihan_gambar == "hapus") {
            $it->gambar = null;
            $it->save();
        }

        return redirect()->action('ItController@index');
    }

    public function destroy($id)
    {
        It::destroy($id);
        return redirect()->action('ItController@index');
    }

    public function editDeskripsi($id) {
        $deskripsi = FasilitasDeskripsi::find($id);
        return view('admin.it.deskripsi', ['deskripsi' => $deskripsi]);
    }

    public function updateDeskripsi(Request $request, $id) {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        $deskripsi = FasilitasDeskripsi::find($id);
        $deskripsi->deskripsi = $request->deskripsi;
        $deskripsi->save();
        return redirect()->action('ItController@index');
    }

    public function saveDeskripsi(Request $request) {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        FasilitasDeskripsi::create([
            'fasilitas' => 'it',
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->action('ItController@index');
    }

    public function createDeskripsi() {
        return view('admin.it.deskripsicreate');
    }
}
