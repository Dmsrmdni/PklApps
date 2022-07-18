<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\MapelController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar',function(){
    echo "<center><h1><u>Halo semuanya</u></h1>";
    echo "<h3><u>kami sedang belajar laravel dasar</h3></u></center>";

});

Route::get('/home',function(){
    return view('home');
});

Route::get('/index',function(){
    return view('pages.index');
});

Route::get('/sekolah',function(){
    return view('pages.sekolah');
});

Route::get('/jurusan',function(){
    return view('pages.jurusan');
});


// route parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{kelas}/{hobby}',function($nama,$umur,$alamat,$jenis_kelamin,$kelas,$hobby){
    return view('pages.biodata', compact('nama','umur','alamat','jenis_kelamin','kelas','hobby'));
});

// route optional parameter
Route::get('/pesanan/{makanan1?}/{makanan2?}', function($makanan1 = "makanan tidak tersedia",$makanan2 = "pesanan tidak tersedia"){
    return view('pages.pesanan',compact('makanan1','makanan2'));
});

// passing data dari controller ke view
Route::get('/pengenalan',[App\Http\Controllers\PengenalanController::class,'pengenalan']);

// passing data dinamis(route parameter) dari controller ke view
Route::get('/intro/{nama}/{alamat}/{umur}',[PengenalanController::class,'intro']);

Route::get('/siswa/',[PengenalanController::class,'siswa']);

Route::get('/artikel/',[LatihanController::class,'artikel']);

Route::get('/nilai/',[LatihanController::class,'nilai']);

Route::get('/penyiaran/',[LatihanController::class,'penyiaran']);

// Route::get('/post/',[PostController::class,'index']);

Route::resource('/post', PostController::class);

Route::resource('/latihan', SiswaController::class);

Route::resource('/latihan2', PesertaController::class);

Route::resource('/latihan3', MapelController::class);

