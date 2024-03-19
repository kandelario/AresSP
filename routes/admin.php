<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Routing\Controllers\Middleware;
Route::get('admin', function(){
    return view('home');
})->middleware('auth');
Route::prefix('admin')->group(function(){
    // route::get('/users', [UserController::class, 'index'])->middleware('auth');
    // route::get('users', function(){
    //     return view('users');
    // });
    route::resource('admin/clientes', 'ClientesController');
    Route::resource('admin/users', App\Http\Controllers\UserController::class)->middleware('auth');
    Route::resource('admin/inventarios', App\Http\Controllers\InventarioController::class)->middleware('auth');
})->middleware('auth');
//route::get('/dashboard', [HoomeController::class, 'dashboard']);