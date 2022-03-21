@extends('layouts.main')

@section('content')
<div class="container col-xl-12 col-xxl-4 px-4 py-5">
<div class="card text-center">
  <div class="card-header">
  <h5 class="card-title">Tanggapan</h5>
  </div>
  <div class="card-body">
    <div class="row">
    <form action="/aspirasi" method="GET">
    <div class="input-group mb-3">
        <input name="search" type="text" class="form-control" placeholder="searching" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button  class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
    </div>
       
    </form>
    </div>
  </div>
  <div class="card-footer text-muted">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kategori</th>
        <th scope="col">Feedback</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach($feedback as $aspirasi)
      <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$aspirasi->category_id}}</td>
      <td>{{$aspirasi->feedback}}</td>
      <td>
          
          @if($aspirasi->status == "menunggu")  
          <span class="badge rounded-pill bg-primary text-light">
          {{$aspirasi->status}}
          </span>
          @elseif($aspirasi->status == "proses")
          <span class="badge rounded-pill bg-danger text-light">
          {{$aspirasi->status}}
          </span>
          @else
          <span class="badge rounded-pill bg-success text-light">
          {{$aspirasi->status}}
          </span>
          @endif

      </td>
        <td>
        <a href="tanggapan/{{$aspirasi->id}}" class="btn btn-success btn-sm">
          Tanggapan
        </a>  
        </td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
  </div>
</div>
    </div>
  </div>
@endsection
