@extends('home')

@section('konten')

       <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Jabatan<span class="caret"></span></button>
        <ul class="dropdown-menu">
          @foreach ($jenisk_list as $jabatan)
        <li><a href="{{url('produk')}}/{{$jabatan->Jabatan}}">
        {{$jabatan->Jabatan}}</a></li>
        @endforeach
    </ul>
  </div>
</br>
    <div class="row">
<div class="col-sm-8">
            <section class="panel">
              <header class="panel-heading">
                <h3>Data Produk</h3>
              </header>
              <table class="table table-hover">
                <thead>
  <tr>
    <th>NIM</th>
    <th>NAMA</th>
    <th>JABATAN</th>
    <th>PERINTAH</th>
  </tr>
</thead>
  @foreach ($karyawan_list as $karyawan)
   <tbody>
    <tr>
    <td>{{$karyawan->NoPeg}}</td>
    <td>{{$karyawan->Nama}}</td>
    <td>{{$karyawan->Jabatan}}</td>
    <td width="200"><a href="{{url('karyawan/ubah/'.$karyawan->id)}}" class="btn btn-warning btn-sm">Ubah</a> <a href="{{url('karyawan/hapus/'.$karyawan->id)}}" class="btn btn-warning btn-sm">Hapus</a> <a href="karyawan/create" class="btn btn-warning btn-sm">Tambah</a></td>
  </tr> 
</tbody>
  @endforeach
</table>
</section>
</div>
</div>
        {{$karyawan_list->links()}}

                <div>
          <a href="produk/cetak/pdf" class="btn btn-warning btn-sm">Cetak</a></td>
        </div>
        
@endsection