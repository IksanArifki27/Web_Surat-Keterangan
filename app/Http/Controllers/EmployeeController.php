<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index(){
     $data = Employee::all();
    return view("DataPegawai",compact('data'));
   }

   public function tambahData(){
        return view('tambahData');
    }
     public function insertData(Request $request){
         $data = Employee::create($request->all());
        return redirect('/pegawai');
    }
    public function tampilData($id){
        $data = Employee::find($id);
        return view('tampilData',compact('data'));
    }

    public function updateData(Request $request,$id){
         $data = Employee::find($id);
          $data->update($request->all());
          $data->save();
          return redirect('/pegawai');
    }
    public function hapusData($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect('/pegawai');
    }
    public function home(){
        return view("home");
    }
}
