<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalloController;

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

Route::get('/home', [HalloController::class, 'index']);

Route::get('/product', [HalloController::class, 'product']);

Route::get('/promotion', [HalloController::class,'promotion']);

Route::get('/contact-us', [HalloController::class,'contactus']);