<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::first();
        return view('admin.kontak.index', ['kontak' => $kontak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kontak = Kontak::all();
        if(sizeof($kontak) >= 1){
            return redirect()->action('KontakController@index');
        }

        return view('admin.kontak.create');
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
            'kontak' => 'required'
        ]);

        $kontak = Kontak::create([
            'kontak' => $request->kontak,
            'judul' => $request->judul,
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $kontak->id.'.kontak.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/kontak/', $imageName);
            $kontak->gambar = 'kontak/'.$imageName;
            $kontak->save();
        }

        return redirect()->action('KontakController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kontak = Kontak::find($id);
        return view('admin.kontak.edit', ['kontak' => $kontak]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
         $request->validate([
             'kontak' => 'required'
         ]);

         $kontak = Kontak::find($id);
         $kontak->kontak = $request->kontak;
         $kontak->judul = $request->judul;
         $kontak->save();

         if($request->gambar != null) {
             $file = $request->file('gambar');
             $imageName = $kontak->id.'.kontak.'.$file->getClientOriginalExtension();
             $path = $request->file('gambar')->storeAs('public/kontak/', $imageName);
             $kontak->gambar = 'kontak/'.$imageName;
             $kontak->save();
         }

         return redirect()->action('KontakController@index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak)
    {
        //
    }
}
