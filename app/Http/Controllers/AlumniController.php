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
        $angkatan = NamaAngkatan::all();
        $alumni = Alumni::paginate(20);
        return view('admin.alumni.index', ['alumni' => $alumni, 'angkatan' => $angkatan]);
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
        //
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
        $alumni->nama = $request->nama;
        $alumni->save();
        return redirect()->action('AlumniController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumni::destroy($id);
        return redirect()->action('AlumniController@index');
    }

    public function template()
    {
        $file = public_path() . '\template\alumni_template.xlsx';
        return response()->download($file);
    }

    public function getAlumniByAngkatan(Request $request) {
        $angkatan = NamaAngkatan::all();
        $nama_angkatan = NamaAngkatan::find($request->nama_angkatan);
        $alumni = $nama_angkatan->alumni()->paginate(20);
        return view('admin.alumni.index', ['alumni' => $alumni, 'angkatan' => $angkatan]);
    }
}
