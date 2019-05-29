@extends('layouts/app')
@section('konten')

<div class="container">     
<div class="row">         
<div class="col-md-10 col-md-offset-1">             
<div class="panel panel-default">                
<div class="panel-heading">PENAMBAHAN DATA KARYAWAN</div>               

<div class="panel-body">      
<form action="{{ url('karyawan/store') }}" method="POST" class="form-horizontal">

<div class="form-group">          
<label for="nim"  class="col-md-4 control-label">NIM</label>
<div class="col-md-6">          
<input type="text"  name="nopeg" id="nopeg" class="form-control">
</div> </div>         

<div class="form-group">          
<label for="nama"  class="col-md-4 control-label">Nama</label>
<div class="col-md-6">         
<input type="text"  name="nama" id="nama" class="form-control">         
</div>        
</div>         

<div class="form-group">          
<label for="nama"  class="col-md-4 control-label">Jabatan</label>
<div class="col-md-6">         
<input type="text"  name="jabatan" id="jabatan" class="form-control">         
</div>        
</div>       

<div class="form-group">          
<label for="password"  class="col-md-4 control-label">Password</label>
<div class="col-md-6">         
<input type="password"  name="password" id="password" class="form-control">        
</div>       
</div>

<div class="form-group">  
<label for="submit" class="col-md-4 control-label"></label>        
<div class="col-md-6">         
<input type="submit"  value="SIMPAN" id="submit">         
</div>         
<input type="hidden" name="_token" value="{{ csrf_token() }}">       </form>

</div>
</div>
</div>
</div>
</div>

@endsection