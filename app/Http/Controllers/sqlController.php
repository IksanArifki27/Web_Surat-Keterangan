<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sqlController extends Controller
{
   public function select(){
       $data = DB::table('ms_petugas')->get();
       return view('0028select',compact('data'));
   }
   public function selectWhere(){
       $data = DB::select(DB::raw("SELECT * FROM ms_petugas AS mp WHERE mp.nama_petugas = 'Rias Gremory'"));
       return view('0028selectWhere',compact('data'));
   }
   public function selectJoin(){
       $data = DB::select(DB::raw("SELECT * FROM ms_buku AS mb JOIN ms_penerbit AS mp ON mb.kode_penerbit = mp.kode_penerbit"));

       return view('0028selectJoin',compact('data'));
   }
   public function selectJoinWhere(){
        $data = DB::select(DB::raw("SELECT * FROM ms_buku AS mb JOIN ms_kategori AS mk ON mb.kode_kategori = mk.kode_kategori WHERE judul_buku = 'DR. Stone'"));
    return view('0028selectJoinWhere',compact('data'));
   }
}
