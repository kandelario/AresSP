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
use App\Models\Personal;

Route::resource('/asistencias', AsistenciaController::class)->names('asistencias')->middleware('auth');

Route::resource('/assignments', AssignmentController::class)->names('assignments')->middleware('auth');

Route::resource('/clientes', ClienteController::class)->names('clientes')->middleware('auth');

Route::get('/InventariotoPDF', [InventarioController::class, 'inv_export_pdf'])->name('InventariotoPDF');

Route::resource('/inventarios', InventarioController::class)->names('inventarios')->middleware('auth');

Route::get('/PersonaltoPDF', [PersonalController::class, 'PersonaltoPDF'])->name('PersonaltoPDF');

Route::resource('/personals', PersonalController::class)->names('personals')->middleware('auth');

Route::resource('/tipos-de-pago', PaymentTypeController::class)->names('tipos_pagos')->middleware('auth');

Route::resource('/users', UserController::class)->names('users')->middleware('auth');














