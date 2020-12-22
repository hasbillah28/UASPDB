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

Route::resource('penduduk', \App\Http\Controllers\PendudukController::class);
Route::resource('kartukeluarga', \App\Http\Controllers\KartuKeluargaController::class);
Route::get('/kartukeluarga/{kartukeluarga}/create', [\App\Http\Controllers\KartuKeluargaController::class, 'create'])->name('anggota-keluarga');
Route::resource('kartukeluarga.keluarga', \App\Http\Controllers\AnggotaKeluargaController::class)->only('destroy', 'create', 'store');