<?php

namespace App\Http\Controllers;

use App\DaftarSiswa;
use App\Imports\DaftarSiswaImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'excel' => 'required|mimes:xls,xlsx',
            'kelas' => 'required',
        ]);

        $i = 0;
        $array = Excel::toArray(new DaftarSiswaImport, request()->file('excel'));
        foreach ($array[0] as $daftar_siswa) {
            if ($i > 0) {
                DaftarSiswa::create([
                    'no_induk' => $daftar_siswa[1],
                    'nama' => $daftar_siswa[2],
                    'kelas' => $request->kelas,
                ]);
            }
            $i++;
        }
        return redirect('daftar_siswa/'.$request->kelas);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\DaftarSiswa $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function show($kelas)
    {
        $daftarSiswa = DaftarSiswa::where('kelas', $kelas)->get();
        return view('admin.daftar_siswa.show', ['daftar_siswa' => $daftarSiswa, 'kelas' => $kelas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\DaftarSiswa $daftarSiswa
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
     * @param \Illuminate\Http\Request $request
     * @param \App\DaftarSiswa $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_induk' => 'required',
            'nama' => 'required',
        ]);
        $siswa = DaftarSiswa::find($id);
        $siswa->no_induk = $request->no_induk;
        $siswa->nama = $request->nama;
        $siswa->save();

        return redirect('daftar_siswa/'.$siswa->kelas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\DaftarSiswa $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarSiswa::destroy($id);

        return redirect()->action('DaftarSiswaController@index');
    }

    public function template()
    {
        $file = public_path() . '\template\daftar_siswa_template.xlsx';
        return response()->download($file);
    }

    public function kosongkanKelas($kelas) {
        DaftarSiswa::where('kelas', $kelas)->delete();
        return redirect('daftar_siswa/'.$kelas);
    }
}
