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
Route::get('home', function(){
    return view('home');
});
Route::get('admin', [HomeController::class, 'index'])->name('admin.index')->middleware('auth');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();
