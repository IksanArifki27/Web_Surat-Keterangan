@extends('layouts.main')
@section('content')
<h1 class="text-center text-primary mt-4 mb-3 fw-bold">Data mahasiswa</h1>
    <a href="/tambahData" class="btn btn-primary mb-4 ms-5">tambah <i class="fa-solid fa-user-plus"></i></a>
    
    <div class="row justify-content-center">
        <div class="col-11">
            <table class="table table-striped table-bordered text-center">
               <thead class="table-dark">
                   <tr>
                       <th>No</th>
                       <th>Nama</th>
                       <th>NBI</th>
                       <th>Angkatan</th>
                       <th>Cetak</th>
                   </tr>
               </thead>
               <tbody>
                   <?php $no=1; ?>
                   @foreach ($data as $dat)
                   <tr>
                       <td>{{$no++}} </td>
                       <td>{{$dat->nama}} </td>
                       <td>{{$dat->nbi}} </td>
                       <td>{{$dat->angkatan}} </td>
                      <td>
                       <a href="/cetakPDF/{{$dat->id}}" target="_blank" class="btn btn-danger"> <i class="fa-solid fa-print"></i> PDF</a>
                      </td>
                   </tr>
                    @endforeach
               </tbody>
           </table>
        </div>
    </div>

@endsection