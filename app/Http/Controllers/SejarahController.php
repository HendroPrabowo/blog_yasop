<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejarah = Sejarah::first();
        return view('admin.sejarah.index', ['sejarah' => $sejarah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sejarah = Sejarah::all();
        if(sizeof($sejarah) >= 1){
            return redirect()->action('SejarahController@index');
        }

        return view('admin.sejarah.create');
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
            'sejarah' => 'required'
        ]);

        $sejarah = Sejarah::create([
            'sejarah' => $request->sejarah,
            'judul' => $request->judul,
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $sejarah->id.'.sejarah.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/sejarah/', $imageName);
            $sejarah->gambar = 'sejarah/'.$imageName;
            $sejarah->save();
        }

        return redirect()->action('SejarahController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function show(Sejarah $sejarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sejarah = Sejarah::find($id);
        return view('admin.sejarah.edit', ['sejarah' => $sejarah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
         $request->validate([
             'sejarah' => 'required'
         ]);

         $sejarah = Sejarah::find($id);
         $sejarah->sejarah = $request->sejarah;
         $sejarah->judul = $request->judul;
         $sejarah->save();

         if($request->gambar != null) {
             $file = $request->file('gambar');
             $imageName = $sejarah->id.'.sejarah.'.$file->getClientOriginalExtension();
             $path = $request->file('gambar')->storeAs('public/sejarah/', $imageName);
             $sejarah->gambar = 'sejarah/'.$imageName;
             $sejarah->save();
         }

         return redirect()->action('SejarahController@index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sejarah $sejarah)
    {
        //
    }
}
