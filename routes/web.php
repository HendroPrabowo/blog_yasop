<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts_blog.depan');
// });

// Dashboard Blog
Route::get('/index', function () {
    // return view('layouts_blog/index');
    return view('layouts_blog.depan');
});

// Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Authentication Routes ...
// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Register User
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'AuthController@register');

// Change Password User
Route::get('/changepassword', 'AuthController@showChangePasswordForm');
Route::post('/changepassword', 'AuthController@changePassword');

Route::get('form', function () {
    return view('form');
});

// ROUTES YANG SEBENARNYA
// Admin Page
Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth')->name('admin');

// Authentication
Route::get('/login', function () {
    return view('admin.login');
})->name('login');
Route::post('/login', 'AuthController@login');

// Resources Controller
Route::resource('kategori', 'KategoriController')->middleware('auth');
Route::resource('post', 'PostController')->middleware('auth');
Route::resource('carousel', 'CarouselController')->middleware('auth');
//Tentang Asrama
Route::resource('visimisi', 'VisimisiController')->middleware('auth');
Route::resource('sejarah', 'SejarahController')->middleware('auth');
Route::resource('pendiri', 'PendiriController')->middleware('auth');
Route::resource('lokasi', 'LokasiController')->middleware('auth');
Route::resource('kontak', 'KontakController')->middleware('auth');
//Pamong
Route::resource('kepala_asrama', 'KepalaAsramaController')->middleware('auth');
Route::resource('staf_pengajar', 'StafPengajarController')->middleware('auth');
Route::resource('staf_pembina', 'StafPembinaController')->middleware('auth');
Route::resource('staf_pendukung', 'StafPendukungController')->middleware('auth');
Route::resource('struktur_organisasi', 'StrukturOrganisasiController')->middleware('auth');
//Fasilitas
Route::resource('akomodasi', 'AkomodasiController')->middleware('auth');
Route::resource('belajar', 'BelajarController')->middleware('auth');
Route::resource('praktikum', 'PraktikumController')->middleware('auth');
Route::resource('kesehatan', 'KesehatanController')->middleware('auth');
Route::resource('it', 'ItController')->middleware('auth');
Route::resource('olahraga', 'OlahragaController')->middleware('auth');
Route::resource('sosial', 'SosialController')->middleware('auth');
//Kegiatan
Route::resource('ekstrakurikuler', 'EkstrakurikulerController')->middleware('auth');
Route::resource('rutinitas', 'RutinitasController')->middleware('auth');
Route::resource('minatbakat', 'MinatBakatController')->middleware('auth');
Route::resource('lainnya', 'LainnyaController')->middleware('auth');
//Kesiswaan
Route::resource('organisasi_siswa', 'OrganisasiSiswaController')->middleware('auth');
Route::resource('daftar_siswa', 'DaftarSiswaController')->middleware('auth');
Route::resource('daftar_prestasi', 'DaftarPrestasiController')->middleware('auth');
Route::resource('blog_siswa', 'BlogSiswaController')->middleware('auth');
Route::resource('alumni', 'AlumniController')->middleware('auth');
Route::get('template/alumni', 'AlumniController@template')->middleware('auth');
Route::get('alumniRoute/getByAngkatan', 'AlumniController@index')->middleware('auth');
Route::post('alumniRoute/getByAngkatan', 'AlumniController@getAlumniByAngkatan')->middleware('auth');
Route::post('alumniRoute/deleteByAngkatan', 'AlumniController@deleteAlumniByAngkatan')->middleware('auth');

//User Biasa
//Tentang Asrama
Route::get('tentang_asrama/visimisi', 'TentangAsramaController@visimisi');
Route::get('tentang_asrama/sejarah', 'TentangAsramaController@sejarah');
Route::get('tentang_asrama/pendiri', 'TentangAsramaController@pendiri');
Route::get('tentang_asrama/lokasi', 'TentangAsramaController@lokasi');
Route::get('tentang_asrama/kontak', 'TentangAsramaController@kontak');
//Pamong
Route::get('pamong/kepala_asrama', 'PamongController@kepala_asrama');
Route::get('pamong/staf_pembina', 'PamongController@staf_pembina');
Route::get('pamong/staf_pendukung', 'PamongController@staf_pendukung');
Route::get('pamong/staf_pengajar', 'PamongController@staf_pengajar');
Route::get('pamong/struktur_organisasi', 'PamongController@struktur_organisasi');
//Fasilitas
Route::get('fasilitas/akomodasi', 'FasilitasController@akomodasi');
Route::get('fasilitas/belajar', 'FasilitasController@belajar');
Route::get('fasilitas/praktikum', 'FasilitasController@praktikum');
Route::get('fasilitas/kesehatan', 'FasilitasController@kesehatan');
Route::get('fasilitas/it', 'FasilitasController@it');
Route::get('fasilitas/olahraga', 'FasilitasController@olahraga');
Route::get('fasilitas/sosial', 'FasilitasController@sosial');
//Kegiatan
Route::get('kegiatan/rutinitas', 'KegiatanController@rutinitas');
Route::get('kegiatan/ekstrakurikuler', 'KegiatanController@ekstrakurikuler');
Route::get('kegiatan/minatbakat', 'KegiatanController@minatbakat');
Route::get('kegiatan/lainnya', 'KegiatanController@lainnya');
//Kesiswaan
Route::get('kesiswaan/organisasi_siswa', 'KesiswaanController@organisasi_siswa');
Route::get('kesiswaan/daftar_siswa', 'KesiswaanController@daftar_siswa');
Route::get('kesiswaan/daftar_prestasi', 'KesiswaanController@daftar_prestasi');
Route::get('kesiswaan/blog_siswa', 'KesiswaanController@blog_siswa');
Route::get('kesiswaan/alumni/{id_angkatan}', 'KesiswaanController@alumni');
Route::get('kesiswaan/alumniByAngkatan/{id_angkatan}', 'KesiswaanController@alumniByAngkatan');

Route::get('depan', function () {
    return view('layouts_blog.depan');
});

// ROUTES USER BIASA
// User melihat postingan
Route::get('/', 'PostController@home');
Route::get('/lihat/{id}', 'PostController@lihat');
Route::get('/kategori/{id}/kategori', 'PostController@kategori');
