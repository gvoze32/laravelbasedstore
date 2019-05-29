@extends('layouts/alt')

@section('konten')
<div class="container">
    <form class="login-form" action="{{ url('karyawan/otentikasi') }}" method="POST">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input name="nik" id="nik" type="text" class="form-control" placeholder="NIK" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input name="katakunci" id="katakunci" type="password" class="form-control" placeholder="Password">
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" value="MASUK" id="submit">Login</button>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endsection