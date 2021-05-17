<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Imports\AlumniImport;
use App\NamaAngkatan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $angkatan_aktif = "Semua Angkatan";
        $angkatan = NamaAngkatan::orderBy('nama_angkatan')->get();
        $alumni = Alumni::paginate(20);
        return view('admin.alumni.index', ['alumni' => $alumni, 'angkatan' => $angkatan, 'angkatan_aktif' => $angkatan_aktif]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'excel' => 'required|mimes:xls,xlsx'
        ]);

        $i = 0;
        $array = Excel::toArray(new AlumniImport, request()->file('excel'));
        $angkatan = NamaAngkatan::create([
            'nama_angkatan' => $array[0][0][2]
        ]);
        foreach ($array[0] as $alumni) {
            if ($i > 1) {
                Alumni::create([
                    'nama' => $alumni[1],
                    'nama_angkatan_id' => $angkatan->id
                ]);
            }
            $i++;
        }
        return redirect()->action('AlumniController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $angkatan = NamaAngkatan::find($id);
        $alumni = Alumni::where('nama_angkatan_id', $id)->get();
        return view('admin.alumni.show', ['alumni' => $alumni, 'angkatan' => $angkatan->nama_angkatan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumni = Alumni::find($id);
        return view('admin.alumni.edit', ['alumni' => $alumni]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);
        $alumni = Alumni::find($id);
        $angkatan_id = $alumni->angkatan->id;
        $alumni->nama = $request->nama;
        $alumni->save();
        return redirect('alumni/'.$angkatan_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumni = Alumni::find($id);
        $angkatan_id = $alumni->angkatan->id;
        Alumni::destroy($id);
        return redirect('alumni/'.$angkatan_id);
    }

    public function template()
    {
        $file = public_path() . '\template\alumni_template.xlsx';
        return response()->download($file);
    }

    public function deleteAngkatan($id) {
        Alumni::where('nama_angkatan_id', $id)->delete();
        NamaAngkatan::destroy($id);
        return redirect()->action('AlumniController@index');
    }
}
