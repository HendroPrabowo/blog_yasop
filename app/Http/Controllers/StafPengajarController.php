<?php

namespace App\Http\Controllers;

use App\StafPengajar;
use Illuminate\Http\Request;

class StafPengajarController extends Controller
{
    public function index()
    {
        $staf_pengajar = StafPengajar::first();
        return view('admin.staf_pengajar.index', ['staf_pengajar' => $staf_pengajar]);
    }

    public function create()
    {
        $staf_pengajar = StafPengajar::all();
        if(sizeof($staf_pengajar) >= 1){
            return redirect()->action('StafPengajarController@index');
        }

        return view('admin.staf_pengajar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $staf_pengajar = StafPengajar::create([
            'text' => $request->text
        ]);

        return redirect()->action('StafPengajarController@index');
    }

    public function show(StafPengajar $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $staf_pengajar = StafPengajar::find($id);
        return view('admin.staf_pengajar.edit', ['staf_pengajar' => $staf_pengajar]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $staf_pengajar = StafPengajar::find($id);
        $staf_pengajar->text = $request->text;
        $staf_pengajar->save();
        return redirect()->action('StafPengajarController@index');
    }

    public function destroy(StafPengajar $kepalaAsrama)
    {
        //
    }
}
