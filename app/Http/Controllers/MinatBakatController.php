<?php

namespace App\Http\Controllers;

use App\MinatBakat;
use Illuminate\Http\Request;

class MinatBakatController extends Controller
{
    public function index()
    {
        $minatbakat = MinatBakat::paginate(5);
        return view('admin.minatbakat.index', ['minatbakat' => $minatbakat]);
    }

    public function create()
    {
        return view('admin.minatbakat.create');
    }

    public function store(Request $request)
    {
        $minatbakat = MinatBakat::create([
            'text' => $request->text
        ]);

        if ($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $minatbakat->id . '.minatbakat.' . $file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/minatbakat/', $imageName);
            $minatbakat->gambar = 'minatbakat/' . $imageName;
            $minatbakat->save();
        }

        return redirect()->action('MinatBakatController@index');
    }

    public function show(MinatBakat $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $minatbakat = MinatBakat::find($id);
        return view('admin.minatbakat.edit', ['minatbakat' => $minatbakat]);
    }

    public function update(Request $request, $id)
    {
        $minatbakat = MinatBakat::find($id);
        $minatbakat->text = $request->text;
        $minatbakat->save();

        if ($request->pilihan_gambar == "ganti") {
            if ($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $minatbakat->id . '.minatbakat.' . $file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/minatbakat/', $imageName);
                $minatbakat->gambar = 'minatbakat/' . $imageName;
                $minatbakat->save();
            }
        } elseif ($request->pilihan_gambar == "hapus") {
            $minatbakat->gambar = null;
            $minatbakat->save();
        }

        return redirect()->action('MinatBakatController@index');
    }

    public function destroy($id)
    {
        MinatBakat::destroy($id);
        return redirect()->action('MinatBakatController@index');
    }
}
