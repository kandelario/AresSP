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

Route::get('/', HomeController::class);

Auth::routes();

// Route::get('', [HomeController::class, 'index']);
// Route::get('/home', [HomeController::class, 'home']);

// Route::get('/admin', [App\Http\Controllers\admin\HomeController::class, 'index']);
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home');

