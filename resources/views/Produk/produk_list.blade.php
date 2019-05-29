@extends('home')

@section('konten')

       <div class="dropdown">
       	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Jenis Produk<span class="caret"></span></button>
       	<ul class="dropdown-menu">
       		@foreach ($jenis_list as $jenis)
				<li><a href="{{url('produk')}}/{{$jenis->KodeJenis}}">
				{{$jenis->Nama}}</a></li>
			@endforeach
		</ul>
	</div></br>

<div class="row">
<div class="col-sm-8">
            <section class="panel">
              <header class="panel-heading">
                <h3>Data Produk</h3>
              </header>
              <table class="table table-hover">
                <thead>
	<tr>
		<th>KODE</th>
		<th>NAMA</th>
		<th>MERK</th>
		<th>HARGA</th>
		<th>PERINTAH</th>
	</tr>
</thead>
	@foreach ($produk_list as $produk)
	 <tbody>
	 	<tr>
		<td>{{$produk->KodePrd}}</td>
		<td>{{$produk->Nama}}</td>
		<td>{{$produk->Merk}}</td>
		<td>{{$produk->Harga}}</td>
		<td width="200"><a href="{{url('produk/ubah/'.$produk->KodePrd)}}" class="btn btn-warning btn-sm">Ubah</a> <a href="{{url('produk/hapus/'.$produk->id)}}" class="btn btn-warning btn-sm">Hapus</a> <a href="produk/create" class="btn btn-warning btn-sm">Tambah</a></td>
	</tr> 
</tbody>
	@endforeach
</table>
  </section>
          </div>
        </div>
        {{$produk_list->links()}}

        <div>
        	<a href="produk/cetak/pdf" class="btn btn-warning btn-sm">Cetak</a></td>
        </div>

@endsection