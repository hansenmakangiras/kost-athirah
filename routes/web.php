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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', 'HomeController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');
Route::middleware(['auth'])->group(function () {
    Route::resource('kamar', 'KamarController');
    Route::resource('tipekamar', 'TipekamarController');
    Route::resource('ajax', 'AjaxController');
    Route::resource('fasilitas', 'FasilitasController');
    Route::resource('layanan', 'LayananController');
    Route::resource('laporan', 'LaporanController');
    Route::resource('pelanggan', 'PelangganController');
    Route::resource('pengaturan', 'PengaturanController');
    Route::resource('reservasi', 'ReservasiController');
    Route::resource('inventaris', 'InventarisController');
    Route::resource('keuangan', 'KeuanganController');
    Route::resource('user', 'UserController');
    Route::get('/keuangan/indexpengeluaran', 'KeuanganController@indexpengeluaran')->name('keuangan.pengeluaran.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/soap/show', 'SoapController@show')->name('soap');
});
