<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\InventariosScheduleController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

route::get('/admin', [AdminController::class, 'index']);

Route::resource('users', UserController::class);

Route::resource('inventarios', InventarioController::class);

route::get('/clientes', function(){
    return view('clientes.index');
})->middleware('auth');
route::get('/clientes/{cliente}', function($cliente){
    return view('clientes');
})->middleware('auth');

Auth::routes();