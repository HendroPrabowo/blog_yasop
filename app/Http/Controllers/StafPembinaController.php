<?php

namespace App\Http\Controllers;

use App\StafPembina;
use Illuminate\Http\Request;

class StafPembinaController extends Controller
{
    public function index()
    {
        $staf_pembina = StafPembina::first();
        return view('admin.staf_pembina.index', ['staf_pembina' => $staf_pembina]);
    }

    public function create()
    {
        $staf_pembina = StafPembina::all();
        if(sizeof($staf_pembina) >= 1){
            return redirect()->action('StafPembinaController@index');
        }

        return view('admin.staf_pembina.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $staf_pembina = StafPembina::create([
            'text' => $request->text
        ]);

        return redirect()->action('StafPembinaController@index');
    }

    public function show(StafPembina $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $staf_pembina = StafPembina::find($id);
        return view('admin.staf_pembina.edit', ['staf_pembina' => $staf_pembina]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $staf_pembina = StafPembina::find($id);
        $staf_pembina->text = $request->text;
        $staf_pembina->save();
        return redirect()->action('StafPembinaController@index');
    }

    public function destroy(StafPembina $kepalaAsrama)
    {
        //
    }
}
