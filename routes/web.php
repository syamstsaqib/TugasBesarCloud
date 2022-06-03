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

Route::get('/', 'App\Http\Controllers\BerandaController@beranda');
Route::get('/jenis-bumerang', 'App\Http\Controllers\BerandaController@jenis');
Route::get('/macam-bumerang/{jenis}', 'App\Http\Controllers\BerandaController@macam');
Route::get('/toko-bumerang', 'App\Http\Controllers\BerandaController@toko');
Route::get('/form-pembelian/{id}', 'App\Http\Controllers\BerandaController@pembelian');

Route::post('/pemesanan', 'App\Http\Controllers\BerandaController@pemesanan');


//admin
//login
Route::get('/login','App\Http\Controllers\AdminController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\AdminController@loginpost');

//logout
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');

//isi
Route::middleware(['auth'])->group(function () {
    Route::get('/admin-beranda', 'App\Http\Controllers\AdminController@beranda');
    Route::get('/data-barang', 'App\Http\Controllers\AdminController@barang');
    Route::get('/riwayat', 'App\Http\Controllers\AdminController@riwayat');
    Route::get('/selesai/{id}', 'App\Http\Controllers\AdminController@selesai');
    Route::get('/hapus/{id}', 'App\Http\Controllers\AdminController@hapus');
});


Route::post('/tambah', 'App\Http\Controllers\AdminController@tambah');
Route::post('/ubah', 'App\Http\Controllers\AdminController@ubah');

