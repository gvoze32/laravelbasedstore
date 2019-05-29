<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
use App\Produk;
use App\Http\Requests;
use PDF;

class ProdukController extends Controller
{
    //
    public function read () {
		$produk_list=Produk::orderBy('id','asc')->paginate(7);
		$jenis_list=Jenis::all();
    	return view ('produk/produk_list', compact("produk_list", "jenis_list"));
	}

	public function create () {
		return view ("produk/create");
	}

	public function store (Request $request) {
		$produk = new \App\Produk;
		$produk->KodePrd = $request->kodeprd;
		$produk->jenis   = $request->jenis;
		$produk->Nama    = $request->nama;
		$produk->Merk    = $request->merk;
		$produk->Harga   = $request->harga;
		$produk->save();

		if (request('gambar') != null) {
            request('gambar')->move('gambar/produk', request('kodeprd') . '.jpeg');
        }

		return redirect('produk');
	}

	public function filter ($jenis) {
		$produk_list=Produk::where("Jenis",$jenis)
		->orderBy('id', 'asc')
		->paginate(7);
		$jenis_list=Jenis::all();
		return view("produk/produk_list", compact("produk_list", "jenis_list"));
	}

	public function ubah ($kodeprd) {
		$produk_list=Produk::all()->where("KodePrd", $kodeprd);
		return view("produk/update", compact("produk_list"));
	}

	public function update (Request $request) {
		$produk = Produk::find($request->id);
		$produk->KodePrd = $request->kodeprd;
		$produk->jenis   = $request->jenis;
		$produk->Nama    = $request->nama;
		$produk->Merk    = $request->merk;
		$produk->Harga   = $request->harga;
		$produk->update();

			if (request('gambar') != null) {
            request('gambar')->move('gambar/produk', request('kodeprd') . '.jpeg');
        }

		return redirect('produk');
	}

	public function hapus ($id) {
		$produk = Produk::find($id);
		$produk->delete();
		return redirect('produk');
	}

	public function pdf () {
		$pdf = Produk::all()->where("jenis", "ACC");
		$pdf = PDF::loadView('produk/pdf', compact('pdf'));
		return $pdf->stream('DataProduk.pdf');
	}
}