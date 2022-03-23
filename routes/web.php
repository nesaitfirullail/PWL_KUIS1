<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PelangganController;
=======
use App\Http\Controllers\HalloController;
use App\Http\Controllers\PegawaiController;
>>>>>>> 8853ab262275e15391f918132182aae3b7562e7a

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

<<<<<<< HEAD
Route::get('/pelanggan', [PelangganController::class, 'index']);

=======
Route::get('/home', [HalloController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/promotion', [HalloController::class,'promotion']);

Route::get('/contact-us', [HalloController::class,'contactus']);
>>>>>>> 8853ab262275e15391f918132182aae3b7562e7a
