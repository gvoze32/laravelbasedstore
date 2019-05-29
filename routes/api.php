<?php

use Illuminate\Http\Request;
use App\Karyawan;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('cors')->post('masuk', function() {
    $karyawan = Karyawan::select(['password'])->where('NoPeg', request('username'))->first();
    if ($karyawan == null) {
      return response()->json(['pesan' => 'Tidak ada']);
    }
    if ($karyawan->password == request('password')) {
      return response()->json(['pesan' => 'Berhasil']);
    }
    else {
      return response()->json(['pesan' => 'Gagal']);
    }
});

Route::middleware('cors')->get('tampil', function() {
    return Karyawan::select(['NoPeg', 'Nama', 'Jabatan'])->get();
});
