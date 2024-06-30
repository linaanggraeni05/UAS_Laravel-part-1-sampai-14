<?php


use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route:: get('/Dosen',function(){
    return"<h1> saya Dosen</h1";
 });
  Route::get('/Dosen/{id}', function($id){
     return "<h1> saya dosen dengan id 100 </h1>";
  });
 
  Route::get('/Dosen/{id}/{nama}', function($id,$nama){
     return "<h1> saya dosen dengan id $id & nama $nama </h1>";
  });

Route::get('Dosen', [DosenController::class, 'index']);

Route::get('/Pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);


//route CRUD
Route :: get ('/pegawai',['App\Http\Controllers\pegawaiController' , 'getpegawai']);
Route :: get ('/pegawai/tambah',['App\Http\Controllers\pegawaiController' , 'tambah']);
Route ::  get('/pegawai/edit/{id}',['App\Http\Controllers\pegawaiController' , 'edit']);
Route ::  get('/pegawai/hapus/{id}',['App\Http\Controllers\pegawaiController' ,'hapus']);

Route::  post('/pegawai/store', ['App\Http\Controllers\pegawaiController' , 'store']);
Route::  post('/pegawai/update',['App\Http\Controllers\pegawaiController','update']);