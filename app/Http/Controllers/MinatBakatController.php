<?php

namespace App\Http\Controllers;

use App\MinatBakat;
use Illuminate\Http\Request;

class MinatBakatController extends Controller
{
    public function index()
    {
        $minatbakat = MinatBakat::first();
        return view('admin.minatbakat.index', ['minatbakat' => $minatbakat]);
    }

    public function create()
    {
        $minatbakat = MinatBakat::all();
        if(sizeof($minatbakat) >= 1){
            return redirect()->action('MinatBakatController@index');
        }

        return view('admin.minatbakat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $minatbakat = MinatBakat::create([
            'text' => $request->text
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $minatbakat->id.'.minatbakat.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/minatbakat/', $imageName);
            $minatbakat->gambar = 'minatbakat/'.$imageName;
            $minatbakat->save();
        }

        return redirect()->action('MinatBakatController@index');
    }

    public function show(MinatBakat $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $minatbakat = MinatBakat::find($id);
        return view('admin.minatbakat.edit', ['minatbakat' => $minatbakat]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $minatbakat = MinatBakat::find($id);
        $minatbakat->text = $request->text;
        $minatbakat->save();

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $minatbakat->id.'.minatbakat.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/minatbakat/', $imageName);
            $minatbakat->gambar = 'minatbakat/'.$imageName;
            $minatbakat->save();
        }

        return redirect()->action('MinatBakatController@index');
    }

    public function destroy(MinatBakat $kepalaAsrama)
    {
        //
    }
}
