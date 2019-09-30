<?php

namespace App\Http\Controllers;

use App\Olahraga;
use Illuminate\Http\Request;

class OlahragaController extends Controller
{
    public function index()
    {
        $olahraga = Olahraga::first();
        return view('admin.olahraga.index', ['olahraga' => $olahraga]);
    }

    public function create()
    {
        $olahraga = Olahraga::all();
        if(sizeof($olahraga) >= 1){
            return redirect()->action('OlahragaController@index');
        }

        return view('admin.olahraga.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $olahraga = Olahraga::create([
            'text' => $request->text
        ]);

        return redirect()->action('OlahragaController@index');
    }

    public function show(Olahraga $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $olahraga = Olahraga::find($id);
        return view('admin.olahraga.edit', ['olahraga' => $olahraga]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $olahraga = Olahraga::find($id);
        $olahraga->text = $request->text;
        $olahraga->save();
        return redirect()->action('OlahragaController@index');
    }

    public function destroy(Olahraga $kepalaAsrama)
    {
        //
    }
}
