<?php

namespace App\Http\Controllers;

use App\Rutinitas;
use Illuminate\Http\Request;

class RutinitasController extends Controller
{
    public function index()
    {
        $rutinitas = Rutinitas::first();
        return view('admin.rutinitas.index', ['rutinitas' => $rutinitas]);
    }

    public function create()
    {
        $rutinitas = Rutinitas::all();
        if(sizeof($rutinitas) >= 1){
            return redirect()->action('RutinitasController@index');
        }

        return view('admin.rutinitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $rutinitas = Rutinitas::create([
            'text' => $request->text
        ]);

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
        $request->validate([
            'text' => 'required'
        ]);

        $rutinitas = Rutinitas::find($id);
        $rutinitas->text = $request->text;
        $rutinitas->save();
        return redirect()->action('RutinitasController@index');
    }

    public function destroy(Rutinitas $kepalaAsrama)
    {
        //
    }
}
