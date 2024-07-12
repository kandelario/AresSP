<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AsistenciaController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

use App\Models\Inventario;
use Barryvdh\DomPDF\Facade\Pdf;

Route::resource('/users', UserController::class)->names('users')->middleware('auth');

Route::resource('/inventarios', InventarioController::class)->names('inventarios')->middleware('auth');

Route::resource('/personals', PersonalController::class)->names('personals')->middleware('auth');

Route::resource('/tipos-de-pago', PaymentTypeController::class)->names('tipos_pagos')->middleware('auth');

Route::resource('/clientes', ClienteController::class)->names('clientes')->middleware('auth');

Route::resource('/asistencias', AsistenciaController::class)->names('asistencias')->middleware('auth');

Route::resource('/assignments', AssignmentController::class)->names('assignments')->middleware('auth');
