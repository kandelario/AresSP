<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

Route::get('/', function(){
    return view('admin.index');
})->middleware('auth');

 Route::get('users', [UserController::class, 'index'])->middleware('auth');
route::get('clientes/{cliente}', function($cliente){
    return view('clientes');
})->middleware('auth');

Route::get('inventarios', [InventarioController::class, 'index'])->middleware('auth');
Auth::routes();