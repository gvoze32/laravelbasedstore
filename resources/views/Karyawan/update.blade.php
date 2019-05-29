@extends('layouts/app')
@section('konten')

<div class="container">     
<div class="row">         
<div class="col-md-10 col-md-offset-1">             
<div class="panel panel-default">                
<div class="panel-heading">PERUBAHAN DATA KARYAWAN</div>               
@foreach ($karyawan_list as $karyawan)
<div class="panel-body">      
<form action="{{ url('karyawan/update') }}" method="POST" class="form-horizontal">

<input type="hidden" name="id" value="{{ $karyawan->id }}">

<div class="form-group">          
<label for="kodeprd"  class="col-md-4 control-label">Nomor Pegawai</label>
<div class="col-md-6">          
<input type="text"  name="nopeg" id="nopeg" class="form-control" value="{{$karyawan->NoPeg}}">
</div> </div>       

<div class="form-group">          
<label for="kodeprd"  class="col-md-4 control-label">Nama</label>
<div class="col-md-6">          
<input type="text"  name="nama" id="nama" class="form-control" value="{{$karyawan->Nama}}">
</div> </div>    

<div class="form-group">          
<label for="namaprd"  class="col-md-4 control-label">Jabatan</label>
<div class="col-md-6">         
<input type="text"  name="jabatan" id="jabatan" class="form-control" value="{{$karyawan->Jabatan}}">         
</div>        
</div>         

<div class="form-group">          
<label for="merk"  class="col-md-4 control-label">Password</label>
<div class="col-md-6">         
<input type="password"  name="password" id="password" class="form-control" value="{{$karyawan->password}}">        
</div>       
</div>

<div class="form-group">  
<label for="submit" class="col-md-4 control-label"></label>        
<div class="col-md-6">         
<input type="submit"  value="SIMPAN" id="submit">         
</div>         
<input type="hidden" name="_token" value="{{ csrf_token() }}">       </form>
@endforeach
</div>
</div>
</div>
</div>
</div>

@endsection