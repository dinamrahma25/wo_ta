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

Route::get('/paket/tambah', [PaketController::class, 'create']);
Route::post('/paket/tambah', [PaketController::class, 'store']);
Route::get('/', [PaketController::class, 'index']);
Route::get('/customer/create', [CustomerController::class, 'create']);
Route::post('/customer/store', [CustomerController::class, 'store']);

