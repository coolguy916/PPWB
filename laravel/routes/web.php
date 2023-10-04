<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Checkout;
use App\Http\Controllers\Keranjang;
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

Route::get('/', [\App\Http\Controllers\HomepageController::class,'index']);
Route::get('/kontak', [HomepageController::class, 'kontak'])->name('kontak');
Route::get('/about', [HomepageController::class, 'about'])->name('about');
Route::get('/produk', [HomepageController::class, 'produk'])->name('produk');
Route::get('/news', [NewspageController::class, 'index']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
