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


// Dashboard Blog
Route::get('/index', 'HomeController@index');

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
Route::resource('informasi', 'LokasiController')->middleware('auth');
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
Route::get('fasilitasmenu', 'FasilitasMenuController@index')->middleware('auth');
Route::get('fasilitasmenu/create', 'FasilitasMenuController@createmenu')->middleware('auth');
Route::post('fasilitasmenu/save', 'FasilitasMenuController@savemenu')->middleware('auth');
Route::get('fasilitasmenu/{menu_id}', 'FasilitasMenuController@fasilitasmenu')->middleware('auth');
Route::get('fasilitasmenu/edit/{menu_id}', 'FasilitasMenuController@editfasilitasmenu')->middleware('auth');
Route::get('fasilitasmenu/delete/{menu_id}', 'FasilitasMenuController@deletefasilitasmenu')->middleware('auth');
Route::put('fasilitasmenu/edit/{menu_id}', 'FasilitasMenuController@updatefasilitasmenu')->middleware('auth');
Route::get('fasilitasmenu/item/{menu_id}', 'FasilitasMenuController@createitem')->middleware('auth');
Route::post('fasilitasmenu/item/{menu_id}', 'FasilitasMenuController@saveitem')->middleware('auth');
Route::get('fasilitasmenu/item/edit/{item_id}', 'FasilitasMenuController@edititem')->middleware('auth');
Route::post('fasilitasmenu/item/edit/{item_id}', 'FasilitasMenuController@updateitem')->middleware('auth');
Route::delete('fasilitasmenu/item/delete/{item_id}', 'FasilitasMenuController@deleteitem')->middleware('auth');
Route::get('fasilitasmenu/blog/{menu_id}', 'FasilitasMenuController@indexmenu')->middleware('auth');

Route::get('akomodasiRoute/deskripsicreate', 'AkomodasiController@createDeskripsi')->middleware('auth');
Route::post('akomodasiRoute/deskripsisave', 'AkomodasiController@saveDeskripsi')->middleware('auth');
Route::get('akomodasiRoute/edit/{fasilitas_desripsi_id}', 'AkomodasiController@editDeskripsi')->middleware('auth');
Route::post('akomodasiRoute/edit/{fasilitas_desripsi_id}', 'AkomodasiController@updateDeskripsi')->middleware('auth');

Route::get('belajarRoute/deskripsicreate', 'BelajarController@createDeskripsi')->middleware('auth');
Route::post('belajarRoute/deskripsisave', 'BelajarController@saveDeskripsi')->middleware('auth');
Route::get('belajarRoute/edit/{fasilitas_desripsi_id}', 'BelajarController@editDeskripsi')->middleware('auth');
Route::post('belajarRoute/edit/{fasilitas_desripsi_id}', 'BelajarController@updateDeskripsi')->middleware('auth');

Route::get('praktikumRoute/deskripsicreate', 'PraktikumController@createDeskripsi')->middleware('auth');
Route::post('praktikumRoute/deskripsisave', 'PraktikumController@saveDeskripsi')->middleware('auth');
Route::get('praktikumRoute/edit/{fasilitas_desripsi_id}', 'PraktikumController@editDeskripsi')->middleware('auth');
Route::post('praktikumRoute/edit/{fasilitas_desripsi_id}', 'PraktikumController@updateDeskripsi')->middleware('auth');

Route::get('kesehatanRoute/deskripsicreate', 'KesehatanController@createDeskripsi')->middleware('auth');
Route::post('kesehatanRoute/deskripsisave', 'KesehatanController@saveDeskripsi')->middleware('auth');
Route::get('kesehatanRoute/edit/{fasilitas_desripsi_id}', 'KesehatanController@editDeskripsi')->middleware('auth');
Route::post('kesehatanRoute/edit/{fasilitas_desripsi_id}', 'KesehatanController@updateDeskripsi')->middleware('auth');

Route::get('itRoute/deskripsicreate', 'ItController@createDeskripsi')->middleware('auth');
Route::post('itRoute/deskripsisave', 'ItController@saveDeskripsi')->middleware('auth');
Route::get('itRoute/edit/{fasilitas_desripsi_id}', 'ItController@editDeskripsi')->middleware('auth');
Route::post('itRoute/edit/{fasilitas_desripsi_id}', 'ItController@updateDeskripsi')->middleware('auth');

Route::get('olahragaRoute/deskripsicreate', 'OlahragaController@createDeskripsi')->middleware('auth');
Route::post('olahragaRoute/deskripsisave', 'OlahragaController@saveDeskripsi')->middleware('auth');
Route::get('olahragaRoute/edit/{fasilitas_desripsi_id}', 'OlahragaController@editDeskripsi')->middleware('auth');
Route::post('olahragaRoute/edit/{fasilitas_desripsi_id}', 'OlahragaController@updateDeskripsi')->middleware('auth');

Route::get('sosialRoute/deskripsicreate', 'SosialController@createDeskripsi')->middleware('auth');
Route::post('sosialRoute/deskripsisave', 'SosialController@saveDeskripsi')->middleware('auth');
Route::get('sosialRoute/edit/{fasilitas_desripsi_id}', 'SosialController@editDeskripsi')->middleware('auth');
Route::post('sosialRoute/edit/{fasilitas_desripsi_id}', 'SosialController@updateDeskripsi')->middleware('auth');

//Kegiatan
Route::resource('ekstrakurikuler', 'EkstrakurikulerController')->middleware('auth');
Route::resource('rutinitas', 'RutinitasController')->middleware('auth');
Route::resource('minatbakat', 'MinatBakatController')->middleware('auth');
Route::resource('lainnya', 'LainnyaController')->middleware('auth');
//Kesiswaan
Route::resource('organisasi_siswa', 'OrganisasiSiswaController')->middleware('auth');
Route::resource('daftar_siswa', 'DaftarSiswaController')->middleware('auth');
Route::get('daftarSiswaRoute/kosongkanKelas/{kelas}', 'DaftarSiswaController@kosongkanKelas')->middleware('auth');
Route::get('template/daftarsiswa', 'DaftarSiswaController@template')->middleware('auth');
Route::resource('daftar_prestasi', 'DaftarPrestasiController')->middleware('auth');
Route::resource('blog_siswa', 'BlogSiswaController')->middleware('auth');
Route::resource('alumni', 'AlumniController')->middleware('auth');
Route::get('template/alumni', 'AlumniController@template')->middleware('auth');
Route::get('alumniRoute/getByAngkatan', 'AlumniController@index')->middleware('auth');
Route::post('alumniRoute/deleteAngkatan/{angkatan_id}', 'AlumniController@deleteAngkatan')->middleware('auth');

//User Biasa
//Tentang Asrama
Route::get('asrama/visimisi', 'InformasiAsramaController@visimisi');
Route::get('asrama/sejarah', 'InformasiAsramaController@sejarah');
Route::get('asrama/pendiri', 'InformasiAsramaController@pendiri');
Route::get('asrama/informasi', 'InformasiAsramaController@index');
Route::get('asrama/kontak', 'InformasiAsramaController@kontak');
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
Route::get('kesiswaan/daftar_siswa/{kelas}', 'KesiswaanController@daftar_siswa');
Route::get('kesiswaan/daftar_prestasi', 'KesiswaanController@daftar_prestasi');
Route::get('kesiswaan/blog_siswa', 'KesiswaanController@blog_siswa');
Route::get('kesiswaan/alumni/{id_angkatan}', 'KesiswaanController@alumni');
Route::get('kesiswaan/alumniByAngkatan/{id_angkatan}', 'KesiswaanController@alumniByAngkatan');

Route::get('beranda', function () {
    return view('client.beranda');
});

// ROUTES USER BIASA
// User melihat postingan
Route::get('/', 'PostController@home');
Route::get('/lihat/{id}', 'PostController@lihat');
Route::get('/kategori/{id}/kategori', 'PostController@kategori');
