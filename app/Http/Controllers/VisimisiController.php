<?php

namespace App\Http\Controllers;

use App\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visimisi = Visimisi::first();
        return view('admin.visimisi.index', ['visimisi' => $visimisi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $visimisi = Visimisi::all();
        if(sizeof($visimisi) >= 1){
            return redirect()->action('VisimisiController@index');
        }

        return view('admin.visimisi.create');
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
            'visimisi' => 'required'
        ]);

        $visimisi = Visimisi::create([
            'visimisi' => $request->visimisi
        ]);

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $visimisi->id.'.visimisi.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/visimisi/', $imageName);
            $visimisi->gambar = 'visimisi/'.$imageName;
            $visimisi->save();
        }

        return redirect()->action('VisimisiController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function show(Visimisi $visimisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visimisi = Visimisi::find($id);
        return view('admin.visimisi.edit', ['visimisi' => $visimisi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'visimisi' => 'required'
        ]);

        $visimisi = Visimisi::find($id);
        $visimisi->visimisi = $request->visimisi;
        $visimisi->save();

        if($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $visimisi->id.'.visimisi.'.$file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/visimisi/', $imageName);
            $visimisi->gambar = 'visimisi/'.$imageName;
            $visimisi->save();
        }

        return redirect()->action('VisimisiController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visimisi $visimisi)
    {
        //
    }
}
