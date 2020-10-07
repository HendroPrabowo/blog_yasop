<?php

namespace App\Http\Controllers;

use App\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::paginate(5);
        return view('admin.ekstrakurikuler.index', ['ekstrakurikuler' => $ekstrakurikuler]);
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $ekstrakurikuler = Ekstrakurikuler::create([
            'text' => $request->text
        ]);

        if ($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $ekstrakurikuler->id . '.ekstrakurikuler.' . $file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/ekstrakurikuler/', $imageName);
            $ekstrakurikuler->gambar = 'ekstrakurikuler/' . $imageName;
            $ekstrakurikuler->save();
        }

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
        $ekstrakurikuler = Ekstrakurikuler::find($id);
        $ekstrakurikuler->text = $request->text;
        $ekstrakurikuler->save();

        if ($request->pilihan_gambar == "ganti") {
            if ($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $ekstrakurikuler->id . '.ekstrakurikuler.' . $file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/ekstrakurikuler/', $imageName);
                $ekstrakurikuler->gambar = 'ekstrakurikuler/' . $imageName;
                $ekstrakurikuler->save();
            }
        } elseif ($request->pilihan_gambar == "hapus") {
            $ekstrakurikuler->gambar = null;
            $ekstrakurikuler->save();
        }

        return redirect()->action('EkstrakurikulerController@index');
    }

    public function destroy($id)
    {
        Ekstrakurikuler::destroy($id);
        return redirect()->action('EkstrakurikulerController@index');
    }
}
