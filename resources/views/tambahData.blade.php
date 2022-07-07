@extends('layouts.main')
@section('content')
   <div class="container">
      <h2 class="text-primary text-center fw-bold mt-2">Tambah Data mahasiswa</h2>
  
      <div class="row justify-content-center">
        <div class="card col-8 mt-2 mb-3">
          <div class="card-body">
            <form action="/insertData" method="post">
                @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="masukan nama"
                  name="nama"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NBI</label>
                <input
                  type="number"
                  class="form-control"
                  placeholder="masukan NBI"
                  name="nbi"
                />
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Angkatan</label>
                <input
                  type="number"
                  class="form-control"
                  placeholder="masukan angkatan"
                  name="angkatan"
                />
                <br>
              <button type="submit" class="btn btn-success"> <i class="fa-solid fa-plus"></i> Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
@endsection