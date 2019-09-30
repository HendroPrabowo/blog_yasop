<?php

namespace App\Http\Controllers;

use App\It;
use Illuminate\Http\Request;

class ItController extends Controller
{
    public function index()
    {
        $it = It::first();
        return view('admin.it.index', ['it' => $it]);
    }

    public function create()
    {
        $it = It::all();
        if(sizeof($it) >= 1){
            return redirect()->action('ItController@index');
        }

        return view('admin.it.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $it = It::create([
            'text' => $request->text
        ]);

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
        $request->validate([
            'text' => 'required'
        ]);

        $it = It::find($id);
        $it->text = $request->text;
        $it->save();
        return redirect()->action('ItController@index');
    }

    public function destroy(It $kepalaAsrama)
    {
        //
    }
}
