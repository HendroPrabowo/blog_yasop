<?php

namespace App\Http\Controllers;

use App\Akomodasi;
use Illuminate\Http\Request;

class AkomodasiController extends Controller
{
    public function index()
    {
        $akomodasi = Akomodasi::first();
        return view('admin.akomodasi.index', ['akomodasi' => $akomodasi]);
    }

    public function create()
    {
        $akomodasi = Akomodasi::all();
        if(sizeof($akomodasi) >= 1){
            return redirect()->action('AkomodasiController@index');
        }

        return view('admin.akomodasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $akomodasi = Akomodasi::create([
            'text' => $request->text
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $akomodasi->id.'.akomodasi.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/akomodasi/', $imageName);
            $akomodasi->gambar = 'akomodasi/'.$imageName;
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
        $request->validate([
            'text' => 'required'
        ]);

        $akomodasi = Akomodasi::find($id);
        $akomodasi->text = $request->text;
        $akomodasi->save();

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $akomodasi->id.'.akomodasi.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/akomodasi/', $imageName);
            $akomodasi->gambar = 'akomodasi/'.$imageName;
            $akomodasi->save();
        }

        return redirect()->action('AkomodasiController@index');
    }

    public function destroy(Akomodasi $kepalaAsrama)
    {
        //
    }
}
