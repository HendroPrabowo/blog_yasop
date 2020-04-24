<?php

namespace App\Http\Controllers;

use App\StafPendukung;
use Illuminate\Http\Request;

class StafPendukungController extends Controller
{
    public function index()
    {
        $staf_pendukung = StafPendukung::first();
        return view('admin.staf_pendukung.index', ['staf_pendukung' => $staf_pendukung]);
    }

    public function create()
    {
        $staf_pendukung = StafPendukung::all();
        if(sizeof($staf_pendukung) >= 1){
            return redirect()->action('StafPendukungController@index');
        }

        return view('admin.staf_pendukung.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $staf_pendukung = StafPendukung::create([
            'text' => $request->text
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $staf_pendukung->id.'.staf_pendukung.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/staf_pendukung/', $imageName);
            $staf_pendukung->gambar = 'staf_pendukung/'.$imageName;
            $staf_pendukung->save();
        }

        return redirect()->action('StafPendukungController@index');
    }

    public function show(StafPendukung $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $staf_pendukung = StafPendukung::find($id);
        return view('admin.staf_pendukung.edit', ['staf_pendukung' => $staf_pendukung]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $staf_pendukung = StafPendukung::find($id);
        $staf_pendukung->text = $request->text;
        $staf_pendukung->save();

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $staf_pendukung->id.'.staf_pendukung.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/staf_pendukung/', $imageName);
            $staf_pendukung->gambar = 'staf_pendukung/'.$imageName;
            $staf_pendukung->save();
        }

        return redirect()->action('StafPendukungController@index');
    }

    public function destroy(StafPendukung $kepalaAsrama)
    {
        //
    }
}
