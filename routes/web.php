<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'login'])->name('auth.login');
Route::get('/admin', [HomeController::class, 'index'])->name('admin.index')->middleware('auth');
Auth::routes();
Route::resource('payment-types', App\Http\Controllers\PaymentTypeController::class);
Route::resource('clientes', App\Http\Controllers\ClientesController::class);