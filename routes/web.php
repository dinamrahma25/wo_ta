<?php

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

use App\Http\Controllers\PaketController;
use App\Http\Controllers\CustomerController;

// Halaman Utama & Paket
Route::get('/', [PaketController::class, 'index']);
Route::get('/paket/tambah', [PaketController::class, 'create']);
Route::post('/paket/tambah', [PaketController::class, 'store']);


// Customer
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/create', [CustomerController::class, 'create']);
Route::post('/customer/store', [CustomerController::class, 'store']);
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit']);
Route::put('/customer/update/{id}', [CustomerController::class, 'update']);
Route::delete('/customer/delete/{id}', [CustomerController::class, 'destroy']);
Route::get('/customer/delete/{id}', [CustomerController::class, 'destroy']);
