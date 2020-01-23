@extends('master')

@section('heading')
  <h3><b>Daftar</b></h3>
  <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">ID +62</span>
    <input type="text" class="form-control" placeholder="Masukkan nomer ponsel" aria-describedby="basic-addon1">
  </div><br>

  <div class="row">
    <div class="col-sm-8" style="color: #cfc9c8">
      Saya ingin menerima pemberitahuan dari EyePlus tentang promosi dan informasi eksklusif lainnya
    </div>
    <div class="col-sm-4">
      <label class="switch btn pull-right">
        <input type="checkbox" checked>
        <span class="slider round"></span>
      </label>
    </div>
  </div><br>
  <div>
    <button type="button" class="btn btn-block info-button">Berikutnya</button>
  </div><br>

  <h3><b>Atau daftar menggunakan</b></h3>
  <div class="row" >
    <div class="col-sm-2 ">Email</div>
    <div class="col-sm-10 text-right fa fa-envelope-open"></div>
    <hr style="margin: 20px 15px 0px 15px">
    <div class="col-sm-6">Sudah punya akun? Masuk </div>
    <div class="col-sm-6 text-right fa fa-angle-right"></div>
  </div><br>
  <div style="color: #cfc9c8">Dengan mandaftar saya setuju kepada syarat dan ketentuan EyePlus.
    <a href="">Syarat dan ketentuan yang berlaku dan kebijakan privasi</a>
  </div>

  <br>
@endsection