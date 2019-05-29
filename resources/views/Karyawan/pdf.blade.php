@extends('layouts/pdf')
@section('konten')

@if (!empty($pdf))

	<table border=1>
	<thead>
		<th>NIM</th>
		<th>NAMA</th>
		<th>JABATAN</th>
		<th>PASSWORD</th>
	</thead>
<tbody>
@foreach ($pdf as $karyawan)
<tr>
<td>{{$karyawan->NoPeg}}</td>
<td width=330> {{$karyawan->Nama}}</td>
<td>{{$karyawan->Jabatan}}</td>
<td width=100> {{$karyawan->password}}</td>
</tr>
@endforeach
</tbody>
</table>

@else
<p>Tidak ada data karyawan</p>

@endif

@endsection