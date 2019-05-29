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
    return view ('beranda');
});

Route::get('/karyawan', 'KaryawanController@read');

Route::get('/karyawan/create', 'KaryawanController@create');

Route::post('/karyawan/store', 'KaryawanController@store');

Route::get('/karyawan/{jenis}', 'KaryawanController@filter');

Route::get('/karyawan/ubah/{KodePrd}', 'KaryawanController@ubah');

Route::post('/karyawan/update', 'KaryawanController@update');

Route::get('/karyawan/hapus/{id}', 'KaryawanController@hapus');

Route::post('/karyawan/otentikasi', 'KaryawanController@otentikasi');

Route::get('/keluar', 'KaryawanController@keluar');

Route::get('/produk', 'ProdukController@read');

Route::get('/produk/create', 'ProdukController@create');

Route::post('/produk/store', 'ProdukController@store');

Route::get('/produk/{jenis}', 'ProdukController@filter');

Route::get('/produk/ubah/{KodePrd}', 'ProdukController@ubah');

Route::post('/produk/update', 'ProdukController@update');

Route::get('/produk/hapus/{id}', 'ProdukController@hapus');

Route::get('/otentikasi', 'LoginController@read');

Route::post('/otentikasi/store', 'LoginController@store');

Route::get('/produk/cetak/pdf', 'ProdukController@pdf');

Route::get('/karyawan/cetak/pdf', 'KaryawanController@pdf');