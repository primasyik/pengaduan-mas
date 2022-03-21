@extends('layouts.main')

@section('content')
<div class="container col-xl-12 col-xxl-4 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Lapor !!!</h1>
        <p class="col-lg-10 fs-4">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">Kode Laporan</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $cat)
          <tr>
            <th scope="row align-center">{{$cat->id}}</th>
            <td>{{$cat->deskripsi}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
        </p>
      </div>
      <div class="col-md-10 mx-auto col-lg-6">
        <form class="p-4 p-md-2 border rounded-3 bg-light" action="/" method="POST">
          @csrf
          <div class="form-floating mb-3">
            <input name="nik" type="text" class="form-control" id="floatingInput" placeholder="nik">
            <label for="floatingInput">NIK </label>
          </div>
          <div class="form-floating mb-3">
            <input name="alamat" type="text" class="form-control" id="floatingInput" placeholder="alamat">
            <label for="floatingInput">Alamat </label>
          </div>
          <div class="form-floating mb-3">
            <input name="kategori" type="text" class="form-control" id="floatingInput" placeholder="kategori">
            <label for="floatingPassword">Kode Laporan</label>
          </div>
          <div class="form-floating mb-3">
            <input name="lokasi" type="text" class="form-control" id="floatingInput" placeholder="lokasi">
            <label for="floatingPassword">Lokasi</label>
          </div>
          <div class="form-floating mb-3">
            <input name="keterangan" type="text" class="form-control" id="floatingInput" placeholder="KETERANGAN">
            <label for="floatingPassword">Keterangan</label>
          </div>
          <hr>
          <button class="w-100 btn btn-lg btn-primary" name="lapor" type="submit">Lapor</button>
        </form>
      </div>
    </div>
  </div>
@endsection