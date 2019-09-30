<?php

namespace App\Http\Controllers;

use App\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::first();
        return view('admin.ekstrakurikuler.index', ['ekstrakurikuler' => $ekstrakurikuler]);
    }

    public function create()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();
        if(sizeof($ekstrakurikuler) >= 1){
            return redirect()->action('EkstrakurikulerController@index');
        }

        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $ekstrakurikuler = Ekstrakurikuler::create([
            'text' => $request->text
        ]);

        return redirect()->action('EkstrakurikulerController@index');
    }

    public function show(Ekstrakurikuler $kepalaAsrama)
    {
        //
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::find($id);
        return view('admin.ekstrakurikuler.edit', ['ekstrakurikuler' => $ekstrakurikuler]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required'
        ]);

        $ekstrakurikuler = Ekstrakurikuler::find($id);
        $ekstrakurikuler->text = $request->text;
        $ekstrakurikuler->save();
        return redirect()->action('EkstrakurikulerController@index');
    }

    public function destroy(Ekstrakurikuler $kepalaAsrama)
    {
        //
    }
}
