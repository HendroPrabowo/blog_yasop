<?php

namespace App\Http\Controllers;

use App\Kesehatan;
use Illuminate\Http\Request;

class KesehatanController extends Controller
{
    public function index()
    {
        $kesehatan = Kesehatan::first();
        return view('admin.kesehatan.index', ['kesehatan' => $kesehatan]);
    }

    public function create()
    {
        $kesehatan = Kesehatan::all();
        if(sizeof($kesehatan) >= 1){
            return redirect()->action('KesehatanController@index');
        }

        return view('admin.kesehatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $kesehatan = Kesehatan::create([
            'text' => $request->text
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $kesehatan->id.'.kesehatan.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/kesehatan/', $imageName);
            $kesehatan->gambar = 'kesehatan/'.$imageName;
            $kesehatan->save();
        }

        return redirect()->action('KesehatanController@index');
    }

    public function show(Kesehatan $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $kesehatan = Kesehatan::find($id);
        return view('admin.kesehatan.edit', ['kesehatan' => $kesehatan]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $kesehatan = Kesehatan::find($id);
        $kesehatan->text = $request->text;
        $kesehatan->save();

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $kesehatan->id.'.kesehatan.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/kesehatan/', $imageName);
            $kesehatan->gambar = 'kesehatan/'.$imageName;
            $kesehatan->save();
        }

        return redirect()->action('KesehatanController@index');
    }

    public function destroy(Kesehatan $kepalaAsrama)
    {
        //
    }
}
