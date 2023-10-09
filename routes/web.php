<?php

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

//Route::get('/', HomeController::class);

Auth::routes();

Route::get('/', [App\Http\Controllers\admin\HomeController::class, 'index']);

Route::get('/home', function(){
    return view('home');
});