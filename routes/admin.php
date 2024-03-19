<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\InventarioController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

Route::get('/', function(){
    return view('admin.index');
})->middleware('auth');

Route::prefix('admin', function(){
    // route::get('/users', [UserController::class, 'index'])->middleware('auth');
    // route::get('users', function(){
    //     return view('users');
    // });
    Route::get('', function(){
        return view('home');
    });
    route::get('/clientes/{cliente}', function($cliente){
        return view('clientes');
    });
    Route::get('/users', [UserController::class, 'index']);
    Route::get('inventarios', [InventarioController::class, 'index']);
})->middleware('auth');
//route::get('/dashboard', [HoomeController::class, 'dashboard']);
Auth::routes();