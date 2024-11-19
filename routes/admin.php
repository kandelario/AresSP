<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\NominasController;
use App\Http\Controllers\SiglaAsistenciasPersonalController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

use App\Models\Inventario;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Personal;
use App\Http\Controllers\RazonSocialController;

Route::resource('/asistencias', AsistenciaController::class)->names('asistencias')->middleware('auth');

Route::resource('/assignments', AssignmentController::class)->names('assignments')->middleware('auth');

Route::resource('/clientes', ClienteController::class)->names('clientes')->middleware('auth');

Route::get('/InventariotoPDF', [InventarioController::class, 'inv_export_pdf'])->name('InventariotoPDF');

Route::get('/inventarios/salidas', [InventarioController::class, 'salidas'])->name('inventarios/salidas');

Route::resource('/inventarios', InventarioController::class)->names('inventarios')->middleware('auth');

Route::resource('movimientos', App\Http\Controllers\MovimientosController::class)->names('movimientos')->middleware('auth');

Route::group(['prefix' => 'nominas'], function(){
    Route::get('/', [NominasController::class, 'index'])->name('nominas.index');
    Route::post('/', [NominasController::class, 'mostrar'])->name('nominas.mostrar');
    Route::post('mostrar', [NominasController::class, 'generar'])->name('nominas.generar');
    // Route::post('recibo/{idPersonal}', [NominasController::class, 'recibo'])->name('nominas.recibo');
    Route::get('recibo', [NominasController::class, 'recibo'])->name('nominas.recibo');
});

Route::get('/PersonaltoPDF', [PersonalController::class, 'PersonaltoPDF'])->name('PersonaltoPDF');

Route::resource('/personals', PersonalController::class)->names('personals')->middleware('auth');
Route::get('/personals/pase_lista', [PersonalController::class, 'PaseLista'])->name('personal.pase_lista');

Route::resource('/razon-socials', RazonSocialController::class)->names('razon-socials')->middleware('auth');

Route::resource('/sigla-asistencias-personals', SiglaAsistenciasPersonalController::class)->names('sigla-asistencias-personals')->middleware('auth');

Route::resource('/tipos-de-pago', PaymentTypeController::class)->names('tipos_pagos')->middleware('auth');

Route::resource('/users', UserController::class)->names('users')->middleware('auth');
