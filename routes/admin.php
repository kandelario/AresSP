<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\AssignmentController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

route::get('admin', [AdminController::class, 'index'])->middleware('auth');

Route::resource('users', UserController::class)->middleware('auth');

Route::resource('inventarios', InventarioController::class)->middleware('auth');

Route::resource('tipos-de-pago', PaymentTypeController::class)->middleware('auth');

Route::resource('clientes', ClienteController::class)->middleware('auth');

Route::resource('personals', PersonalController::class)->middleware('auth');

Route::resource('assignments', AssignmentController::class)->middleware('auth');

Auth::routes();