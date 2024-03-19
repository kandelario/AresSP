<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

// Route::get('/admin', function(){
//     return view('home');
// })->middleware('auth');
route::get('/admin', [AdminController::class, 'index']);

Route::get('users', [UserController::class, 'index'])->name('users.index')->middleware('auth');
Route::get('users/show', [UserController::class, 'show'])->name('users.show')->middleware('auth');
Route::get('users/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('auth');
Route::get('users/create', [UserController::class, 'create'])->name('users.create')->middleware('auth');
Route::get('users/store', [UserController::class, 'store'])->name('users.store')->middleware('auth');
Route::get('users/destroy', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');
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
