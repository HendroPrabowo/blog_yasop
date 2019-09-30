<?php

namespace App\Http\Controllers;

use App\DaftarPrestasi;
use Illuminate\Http\Request;

class DaftarPrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_prestasi = DaftarPrestasi::all();
        return view('admin.daftar_prestasi.index', ['daftar_prestasi' => $daftar_prestasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.daftar_prestasi.create');
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
            'prestasi' => 'required',
            'siswa' => 'required',
            'berita' => 'required',
        ]);

        $daftar_prestasi = DaftarPrestasi::create([
            'prestasi' => $request->prestasi,
            'siswa' => $request->siswa,
            'berita' => $request->berita,
        ]);

        return redirect()->action('DaftarPrestasiController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DaftarPrestasi  $daftarPrestasi
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarPrestasi $daftarPrestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DaftarPrestasi  $daftarPrestasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftar_prestasi = DaftarPrestasi::find($id);
        return view('admin.daftar_prestasi.edit', ['daftar_prestasi' => $daftar_prestasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DaftarPrestasi  $daftarPrestasi
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
         $request->validate([
             'prestasi' => 'required',
             'siswa' => 'required',
             'berita' => 'required',
         ]);

         $daftar_prestasi = DaftarPrestasi::find($id);
         $daftar_prestasi->prestasi = $request->prestasi;
         $daftar_prestasi->siswa = $request->siswa;
         $daftar_prestasi->berita = $request->berita;
         $daftar_prestasi->save();

         return redirect()->action('DaftarPrestasiController@index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DaftarPrestasi  $daftarPrestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarPrestasi::destroy($id);
        return redirect()->action('DaftarPrestasiController@index');
    }
}
