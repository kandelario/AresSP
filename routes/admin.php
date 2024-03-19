<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

Route::get('/admin', function(){
    return view('home');
})->middleware('auth');

Route::get('users', [UserController::class, 'index'])->middleware('auth');
// Route::get('users', [UserController::class, 'create'])->middleware('auth');
// Route::get('users', [UserController::class, 'store'])->middleware('auth');

route::get('/clientes', function(){
    return view('clientes.index');
})->middleware('auth');
route::get('/clientes/{cliente}', function($cliente){
    return view('clientes');
})->middleware('auth');

Route::get('inventarios', [InventarioController::class, 'index']);
Route::get('inventarios.create', [InventarioController::class, 'create']);
Route::get('inventarios/show', [InventarioController::class, 'show']);
Route::get('inventarios/destroy', [InventarioController::class, 'destroy']);
