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


Route::get('/','ControllerLogin@index');
Route::get('/login', 'ControllerLogin@login');
Route::post('/loginPost', 'ControllerLogin@loginPost');
Route::get('/logout', 'ControllerLogin@logout')->name('logout');
Route::get('/update_profil/{id_user}','ControllerLogin@UpdateUser');
Route::post('/update_profil_data/{id_user}','ControllerLogin@UpdateUserData');
Route::post('/update_pass/{id_user}','ControllerLogin@UpdatePass');

Route::resource('mahasiswa', 'ControllerMahasiswa');

// Route::get('/data_mahasiswa', function () {
//     return view('data_mahasiswa');
// });
// Route::get('/tambah_data_mahasiswa', function () {
//     return view('tambah_data_mahasiswa');
// });
// Route::get('/update_data_mahasiswa', function () {
//     return view('update_data_mahasiswa');
// });


Route::resource('sdm', 'ControllerSDM');
// Route::get('/data_sdm', function () {
//     return view('data_sdm');
// });
// Route::get('/tambah_data_sdm', function () {
//     return view('tambah_data_sdm');
// });

Route::resource('permohonan', 'ControllerPermohonan');
Route::resource('permohonandetail', 'ControllerPermohonandetail');

// Route::get('/data_permohonan', function () {
//     return view('data_permohonan');
// });
// Route::get('/tambah_data_permohonan', function () {
//     return view('tambah_data_permohonan');
// });
// Route::get('/tambah_data_permohonan_detail', function () {
//     return view('tambah_data_permohonan_detail');
// });
// Route::get('/update_data_permohonan', function () {
//     return view('update_data_permohonan');   
// });
Route::resource('prodi', 'ControllerProdi');

Route::resource('surat', 'ControllerSurat');

    // Route::get('/data_surat', function () {
    //     return view('data_surat');
    // });
    // Route::get('/tambah_data_surat', function () {
    //     return view('tambah_data_surat');
    // });
    Route::get('/suratjadian', function () {
        return view('suratjadi');
    });
    Route::get('/suratjadian1', function () {
        return view('suratjadi1');
    });
    Route::get('/suratjadian2', function () {   
        return view('suratjadi2');
    });
    Route::get('/suratjadian3', function () {
        return view('suratjadi3	');
    });
Route::get('/suratjadi/{id_surat}', 'ControllerSurat@suratjadi')->name('suratjadi');
Route::post('/printsurat/{id_surat}','ControllerSurat@postsurat')->name('postprint');
Route::get('/print/{id_surat}', 'ControllerSurat@print')->name('print');
// Route::get('/print', 'ControllerSurat@print')->name('print');

// Route::get('/print-pdf', [ 'as' => 'customer.printpdf', 'uses' => 'ControllerSurat@printPDF']);