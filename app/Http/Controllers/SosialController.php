<?php

namespace App\Http\Controllers;

use App\Sosial;
use Illuminate\Http\Request;

class SosialController extends Controller
{
    public function index()
    {
        $sosial = Sosial::first();
        return view('admin.sosial.index', ['sosial' => $sosial]);
    }

    public function create()
    {
        $sosial = Sosial::all();
        if(sizeof($sosial) >= 1){
            return redirect()->action('SosialController@index');
        }

        return view('admin.sosial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $sosial = Sosial::create([
            'text' => $request->text
        ]);

        return redirect()->action('SosialController@index');
    }

    public function show(Sosial $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $sosial = Sosial::find($id);
        return view('admin.sosial.edit', ['sosial' => $sosial]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $sosial = Sosial::find($id);
        $sosial->text = $request->text;
        $sosial->save();
        return redirect()->action('SosialController@index');
    }

    public function destroy(Sosial $kepalaAsrama)
    {
        //
    }
}
