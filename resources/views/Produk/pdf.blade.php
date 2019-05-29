@extends('layouts/pdf')
@section('konten')

@if (!empty($pdf))

	<table border=1>
	<thead>
		<th>KODE</th>
		<th>NAMA</th>
		<th>MERK</th>
		<th>HARGA</th>
	</thead>
<tbody>
@foreach ($pdf as $produk)
<tr>
<td>{{$produk->KodePrd}}</td>
<td width=330> {{$produk->Nama}}</td>
<td>{{$produk->Merk}}</td>
<td width=100> {{$produk->Harga}}</td>
</tr>
@endforeach
</tbody>
</table>

@else
<p>Tidak ada data produk</p>

@endif

@endsection