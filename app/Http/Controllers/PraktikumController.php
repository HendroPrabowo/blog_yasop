<?php

namespace App\Http\Controllers;

use App\Praktikum;
use Illuminate\Http\Request;

class PraktikumController extends Controller
{
    public function index()
    {
        $praktikum = Praktikum::paginate(5);
        return view('admin.praktikum.index', ['praktikum' => $praktikum]);
    }

    public function create()
    {
        return view('admin.praktikum.create');
    }

    public function store(Request $request)
    {
        $praktikum = Praktikum::create([
            'text' => $request->text
        ]);

        if ($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $praktikum->id . '.praktikum.' . $file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/praktikum/', $imageName);
            $praktikum->gambar = 'praktikum/' . $imageName;
            $praktikum->save();
        }

        return redirect()->action('PraktikumController@index');
    }

    public function show(Praktikum $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $praktikum = Praktikum::find($id);
        return view('admin.praktikum.edit', ['praktikum' => $praktikum]);
    }

    public function update(Request $request, $id)
    {
        $praktikum = Praktikum::find($id);
        $praktikum->text = $request->text;
        $praktikum->save();

        if ($request->pilihan_gambar == "ganti") {
            if ($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $praktikum->id . '.praktikum.' . $file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/praktikum/', $imageName);
                $praktikum->gambar = 'praktikum/' . $imageName;
                $praktikum->save();
            }
        } elseif ($request->pilihan_gambar == "hapus") {
            $praktikum->gambar = null;
            $praktikum->save();
        }

        return redirect()->action('PraktikumController@index');
    }

    public function destroy($id)
    {
        Praktikum::destroy($id);
        return redirect()->action('PraktikumController@index');
    }
}
