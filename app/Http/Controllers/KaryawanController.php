<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenisk;
use App\Karyawan;
use App\Http\Requests;
use Session;
use PDF;

class KaryawanController extends Controller
{
    //
    public function read () {
		$karyawan_list=Karyawan::orderBy('id','asc')->paginate(5);
		$jenisk_list=Jenisk::all();
    	return view ('karyawan/karyawan_list', compact("karyawan_list", "jenisk_list"));
	}

	public function create () {
		return view ("karyawan/create");
	}

	public function store (Request $request) {
		$karyawan = new \App\Karyawan;
		$karyawan->NoPeg       = $request->nopeg;
		$karyawan->Nama        = $request->nama;
		$karyawan->Jabatan     = $request->jabatan;
		$karyawan->password    = $request->password;
		$karyawan->save();
		return redirect('karyawan');
	}

	public function filter ($jabatan) {
		$karyawan_list=Karyawan::where("Jabatan",$jabatan)
		->orderBy('id', 'asc')
		->paginate(5);
		$jabatan_list=Jenisk::all();
		return view("karyawan/karyawan_list",compact("karyawan_list", "jenisk_list"));
	}

	public function ubah ($nopeg) {
		$karyawan_list=Karyawan::all()->where("NoPeg", $nopeg);
		return view("karyawan/update", compact("karyawan_list"));
	}

	public function update (Request $request) {
		$karyawan = Karyawan::find($request->id);
		$karyawan->NoPeg       = $request->nopeg;
		$karyawan->Nama        = $request->nama;
		$karyawan->Jabatan     = $request->jabatan;
		$karyawan->password    = $request->password;
		$karyawan->update();
	 	return redirect('karyawan');
	}

	public function hapus ($id) {
		$karyawan = Karyawan::find($id);
		$karyawan->delete();
		return redirect('karyawan');
	}

	public function otentikasi (Request $request) {
		$nik = $request->nik;
		$katakunci = $request->katakunci;

		$karyawan=Karyawan::all()
		->where("NoPeg", $nik);

		foreach ($karyawan as $data);
		
		if($nik == $data->NoPeg and $katakunci == $data->password) {
			Session::put('otentikasi', $data->Nama);
			return redirect ('/karyawan');
		} else {
			return redirect ('/otentikasi');
		}
	}

	public function keluar () {
		Session::forget("otentikasi");
		return redirect ("otentikasi");
	}

	public function pdf () {
		$pdf = Karyawan::all()->where("NoPeg", "00");
		$pdf = PDF::loadView('karyawan/pdf', compact('pdf'));
		return $pdf->stream('DataKaryawan.pdf');
	}
}