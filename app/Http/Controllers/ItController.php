<?php

namespace App\Http\Controllers;

use App\It;
use Illuminate\Http\Request;

class ItController extends Controller
{
    public function index()
    {
        $it = It::paginate(5);
        return view('admin.it.index', ['it' => $it]);
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
}
