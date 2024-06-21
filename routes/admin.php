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

route::get('admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');

Route::resource('users', UserController::class)->names('admin.users')->middleware('auth');

Route::resource('inventarios', InventarioController::class)->names('admin.inventarios')->middleware('auth');

Route::resource('tipos-de-pago', PaymentTypeController::class)->names('admin.tiopos_pagos')->middleware('auth');

Route::resource('clientes', ClienteController::class)->names('admin.clientes')->middleware('auth');

Route::resource('personals', PersonalController::class)->names('admin.personal')->middleware('auth');

Route::resource('assignments', AssignmentController::class)->names('admin.asignaciones')->middleware('auth');

Auth::routes();