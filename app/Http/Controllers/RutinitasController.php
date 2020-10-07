<?php

namespace App\Http\Controllers;

use App\Rutinitas;
use Illuminate\Http\Request;

class RutinitasController extends Controller
{
    public function index()
    {
        $rutinitas = Rutinitas::paginate(5);
        return view('admin.rutinitas.index', ['rutinitas' => $rutinitas]);
    }

    public function create()
    {
        return view('admin.rutinitas.create');
    }

    public function store(Request $request)
    {
        $rutinitas = Rutinitas::create([
            'text' => $request->text
        ]);

        if ($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $rutinitas->id . '.rutinitas.' . $file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/rutinitas/', $imageName);
            $rutinitas->gambar = 'rutinitas/' . $imageName;
            $rutinitas->save();
        }

        return redirect()->action('RutinitasController@index');
    }

    public function show(Rutinitas $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $rutinitas = Rutinitas::find($id);
        return view('admin.rutinitas.edit', ['rutinitas' => $rutinitas]);
    }

    public function update(Request $request, $id)
    {
        $rutinitas = Rutinitas::find($id);
        $rutinitas->text = $request->text;
        $rutinitas->save();

        if ($request->pilihan_gambar == "ganti") {
            if ($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $rutinitas->id . '.rutinitas.' . $file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/rutinitas/', $imageName);
                $rutinitas->gambar = 'rutinitas/' . $imageName;
                $rutinitas->save();
            }
        } elseif ($request->pilihan_gambar == "hapus") {
            $rutinitas->gambar = null;
            $rutinitas->save();
        }

        return redirect()->action('RutinitasController@index');
    }

    public function destroy($id)
    {
        Rutinitas::destroy($id);
        return redirect()->action('RutinitasController@index');
    }
}
