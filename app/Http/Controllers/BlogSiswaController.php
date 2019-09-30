<?php

namespace App\Http\Controllers;

use App\BlogSiswa;
use Illuminate\Http\Request;

class BlogSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_siswa = BlogSiswa::all();
        return view('admin.blog_siswa.index', ['blog_siswa' => $blog_siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_siswa.create');
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
            'nama' => 'required',
            'judul' => 'required',
            'link' => 'required',
        ]);

        $siswa = BlogSiswa::create([
            'nama' => $request->nama,
            'judul' => $request->judul,
            'link' => $request->link,
        ]);

        return redirect()->action('BlogSiswaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogSiswa  $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(BlogSiswa $daftarSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogSiswa  $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog_siswa = BlogSiswa::find($id);
        return view('admin.blog_siswa.edit', ['blog_siswa' => $blog_siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogSiswa  $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'judul' => 'required',
            'link' => 'required',
        ]);

        $blog_siswa = BlogSiswa::find($id);
        $blog_siswa->judul = $request->judul;
        $blog_siswa->nama = $request->nama;
        $blog_siswa->link = $request->link;
        $blog_siswa->save();

        return redirect()->action('BlogSiswaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogSiswa  $daftarSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlogSiswa::destroy($id);

        return redirect()->action('BlogSiswaController@index');
    }
}
