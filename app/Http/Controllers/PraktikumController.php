<?php

namespace App\Http\Controllers;

use App\Praktikum;
use Illuminate\Http\Request;

class PraktikumController extends Controller
{
    public function index()
    {
        $praktikum = Praktikum::first();
        return view('admin.praktikum.index', ['praktikum' => $praktikum]);
    }

    public function create()
    {
        $praktikum = Praktikum::all();
        if(sizeof($praktikum) >= 1){
            return redirect()->action('PraktikumController@index');
        }

        return view('admin.praktikum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $praktikum = Praktikum::create([
            'text' => $request->text
        ]);

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
        $request->validate([
            'text' => 'required'
        ]);

        $praktikum = Praktikum::find($id);
        $praktikum->text = $request->text;
        $praktikum->save();
        return redirect()->action('PraktikumController@index');
    }

    public function destroy(Praktikum $kepalaAsrama)
    {
        //
    }
}
