<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{kelas}/{hobby}',function($nama,$umur,$alamat,$jenis_kelamin,$kelas,$hobby){
    return view('pages.biodata', compact('nama','umur','alamat','jenis_kelamin','kelas','hobby'));
});

Route::get('/pesanan/{makanan?}', function($makanan = "makanan tidak tersedia"){
    return view('pages.pesanan',compact('makanan'));
});

