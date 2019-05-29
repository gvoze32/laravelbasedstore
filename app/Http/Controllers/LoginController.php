<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    //
    public function read () {
    return view ('otentikasi');
	}

	public function store (Request $request) {
		$produk = new \App\Produk;
		$produk->Username    = $request->username;
		$produk->Password    = $request->password;
		$produk->save();
	}
}