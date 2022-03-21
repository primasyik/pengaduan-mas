@extends('layouts.main')

@section('content')
<div class="container col-xl-8 col-xxl-4 px-4 py-5">
<div class="card text-center">
  <div class="card-header">
  <h5 class="card-title">Kategori Pengaduan</h5>
  </div>
  <button class="btn btn-primary">Tambah Kategori</button>
  <div class="card-footer text-muted">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
    </tr>
  </thead>
  <tbody>
  @foreach($category as $category)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$category->deskripsi}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

  </div>
</div>
    </div>
  </div>




@endsection