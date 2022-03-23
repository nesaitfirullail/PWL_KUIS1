<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;


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



Route::get('/barang', [BarangController::class, 'index']);


Route::get('/pelanggan', [PelangganController::class, 'index']);


Route::get('/pegawai', [PegawaiController::class, 'index']);


Route::get('/supplier', [SupplierController::class, 'index']);

