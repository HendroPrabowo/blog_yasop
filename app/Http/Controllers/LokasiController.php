<?php

namespace App\Http\Controllers;

use App\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = Lokasi::first();
        return view('admin.lokasi.index', ['lokasi' => $lokasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        if(sizeof($lokasi) >= 1){
            return redirect()->action('LokasiController@index');
        }

        return view('admin.lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required'
        ]);

        $lokasi = Lokasi::create([
            'lokasi' => $request->lokasi,
            'judul' => $request->judul,
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $lokasi->id.'.lokasi.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/lokasi/', $imageName);
            $lokasi->gambar = 'lokasi/'.$imageName;
            $lokasi->save();
        }

        return redirect()->action('LokasiController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function show(Lokasi $lokasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lokasi = Lokasi::find($id);
        return view('admin.lokasi.edit', ['lokasi' => $lokasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
         $request->validate([
             'lokasi' => 'required'
         ]);

         $lokasi = Lokasi::find($id);
         $lokasi->lokasi = $request->lokasi;
         $lokasi->judul = $request->judul;
         $lokasi->save();

         if($request->gambar != null) {
             $file = $request->file('gambar');
             $imageName = $lokasi->id.'.lokasi.'.$file->getClientOriginalExtension();
             $path = $request->file('gambar')->storeAs('public/lokasi/', $imageName);
             $lokasi->gambar = 'lokasi/'.$imageName;
             $lokasi->save();
         }

         return redirect()->action('LokasiController@index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lokasi $lokasi)
    {
        //
    }
}
