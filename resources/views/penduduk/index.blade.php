@extends('layouts.main')

@section('content')
<div class="container col-xl-8 col-xxl-4 px-4 py-5">
<div class="card text-center">
  <div class="card-header">
  <h5 class="card-title">Data Penduduk</h5>
  </div>
  <div class="card-body">
    <div class="row">
    
    </div>
  </div>
  <div class="card-footer text-muted">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIK</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
  @foreach($penduduk as $penduduk)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$penduduk->nik}}</td>
      <td>{{$penduduk->alamat}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
  </div>
</div>
    </div>
  </div>
@endsection
