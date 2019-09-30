<?php

namespace App\Http\Controllers;

use App\DaftarSiswa;
use Illuminate\Http\Request;

class DaftarSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_siswa = DaftarSiswa::all();
        return view('admin.daftar_siswa.index', ['daftar_siswa' => $daftar_siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.daftar_siswa.create');
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
            'no_induk' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        $siswa = DaftarSiswa::create([
            'no_induk' => $request->no_induk,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ]);

        return redirect()->action('DaftarSiswaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DaftarSiswa  $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarSiswa $daftarSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DaftarSiswa  $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftar_siswa = DaftarSiswa::find($id);
        return view('admin.daftar_siswa.edit', ['daftar_siswa' => $daftar_siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DaftarSiswa  $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_induk' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        $daftar_siswa = DaftarSiswa::find($id);
        $daftar_siswa->no_induk = $request->no_induk;
        $daftar_siswa->nama = $request->nama;
        $daftar_siswa->kelas = $request->kelas;
        $daftar_siswa->save();

        return redirect()->action('DaftarSiswaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DaftarSiswa  $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarSiswa::destroy($id);

        return redirect()->action('DaftarSiswaController@index');
    }
}
