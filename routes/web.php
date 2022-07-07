<?php


use App\Http\Controllers\mahasiswaController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sqlController;
use App\Models\mahasiswa;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/mahasiswa',[mahasiswaController::class,'index']);
Route::get('/tambahData',[mahasiswaController::class,'tambahData']);
Route::post('/insertData',[mahasiswaController::class,'insertData']);
Route::get('/cetakPDF/{id}',[mahasiswaController::class,'cetakPDF']);
