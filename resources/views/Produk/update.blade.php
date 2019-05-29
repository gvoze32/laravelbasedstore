@extends('layouts/app')
@section('konten')

<div class="container">     
<div class="row">         
<div class="col-md-10 col-md-offset-1">             
<div class="panel panel-default">                
<div class="panel-heading">PERUBAHAN DATA PRODUK</div>               
@foreach ($produk_list as $produk)
<div class="panel-body">      
<form action="{{ url('produk/update') }}" enctype="multipart/form-data" method="POST" class="form-horizontal">

<input type="hidden" name="id" value="{{ $produk->id }}">

<div class="form-group">          
<label for="kodeprd"  class="col-md-4 control-label">Kode Produk</label>
<div class="col-md-6">          
<input type="text"  name="kodeprd" id="kodeprd" class="form-control" value="{{$produk->KodePrd}}">
</div> </div>       

<div class="form-group">          
<label for="kodeprd"  class="col-md-4 control-label">Jenis</label>
<div class="col-md-6">          
<input type="text"  name="jenis" id="jenis" class="form-control" value="{{$produk->jenis}}">
</div> </div>    

<div class="form-group">          
<label for="namaprd"  class="col-md-4 control-label">Nama</label>
<div class="col-md-6">         
<input type="text"  name="nama" id="nama" class="form-control" value="{{$produk->Nama}}">         
</div>        
</div>         

<div class="form-group">          
<label for="merk"  class="col-md-4 control-label">Merk</label>
<div class="col-md-6">         
<input type="text"  name="merk" id="merk" class="form-control" value="{{$produk->Merk}}">        
</div>       
</div>

<div class="form-group">          
<label for="harga"  class="col-md-4 control-label">Harga</label>
<div class="col-md-6">         
<input type="number"  name="harga" id="harga" class="form-control" value="{{$produk->Harga}}">        
</div>       
</div>

<div class="form-group">          
<label for="gambar" class="col-md-4 control-label">Gambar</label>
<div class="col-md-6">         
<input type="file"  name="gambar" id="gambar" class="form-control">        
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