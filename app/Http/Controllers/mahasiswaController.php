<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use PDF;

class mahasiswaController extends Controller
{
    public function index(){
        $data = mahasiswa::all();
       return view("DataMahasiswa",compact('data'));
      }

      public function tambahData(){
        return view('tambahData');
    }
     public function insertData(Request $request){
         $data = mahasiswa::create($request->all());
        return redirect('/mahasiswa');
    }
    public function cetakPDF($id){
        $data = mahasiswa::find($id);
        $pdf = PDF::loadView('cetak',compact('data'));
        $pdf->setPaper('A4','potrait');
        return $pdf->stream('cetak_kop.pdf');

    }
}
