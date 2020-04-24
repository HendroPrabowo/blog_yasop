<?php

namespace App\Http\Controllers;

use App\Lainnya;
use Illuminate\Http\Request;

class LainnyaController extends Controller
{
    public function index()
    {
        $lainnya = Lainnya::first();
        return view('admin.lainnya.index', ['lainnya' => $lainnya]);
    }

    public function create()
    {
        $lainnya = Lainnya::all();
        if(sizeof($lainnya) >= 1){
            return redirect()->action('LainnyaController@index');
        }

        return view('admin.lainnya.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $lainnya = Lainnya::create([
            'text' => $request->text
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $lainnya->id.'.lainnya.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/lainnya/', $imageName);
            $lainnya->gambar = 'lainnya/'.$imageName;
            $lainnya->save();
        }

        return redirect()->action('LainnyaController@index');
    }

    public function show(Lainnya $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $lainnya = Lainnya::find($id);
        return view('admin.lainnya.edit', ['lainnya' => $lainnya]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $lainnya = Lainnya::find($id);
        $lainnya->text = $request->text;
        $lainnya->save();

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $lainnya->id.'.lainnya.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/lainnya/', $imageName);
            $lainnya->gambar = 'lainnya/'.$imageName;
            $lainnya->save();
        }

        return redirect()->action('LainnyaController@index');
    }

    public function destroy(Lainnya $kepalaAsrama)
    {
        //
    }
}
