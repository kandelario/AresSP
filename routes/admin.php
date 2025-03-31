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
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiglaAsistenciasPersonalController;
use App\Http\Controllers\PermissionController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

use App\Models\Inventario;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Personal;
use App\Http\Controllers\RazonSocialController;
use App\Models\Asistencia;
use App\Models\Assignment;
use Illuminate\Http\Request;

// Route::get('/asistencias/formulario', function(){
//     return view('asistencias.asistencias');
// });
Route::get('/asistencias/formulario', [AsistenciaController::class, 'asistencias'])->name('asistencias.formulario')->middleware('auth');
// Route::post('/asistencias/personal', [AsistenciaController::class, 'getpersonal'])->name('asistencias.personal');
Route::post('/asistencias/show', function(Request $request){
    // return view('asistencias.form')->with('request', $request);
    // return dd($request->all());
})->name('asistencias.personal');
Route::post('/asistencias/set', function(Request $request){
    // return view('asistencias.form')->with('request', $request);
    return dd($request->all());
})->name('asistencias.personal');
Route::resource('/asistencias', AsistenciaController::class)->names('asistencias');


Route::post('assignments/return_personal_not_assigned', [AssignmentController::class, 'return_personal_not_assigned'])->name('return_personal_not_assigned');
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
    Route::get('/mis_guardias', [NominasController::class, 'MisGuardias']);
});

Route::resource('permissions', PermissionController::class)->middleware('auth');

Route::get('/PersonaltoPDF', [PersonalController::class, 'PersonaltoPDF'])->name('PersonaltoPDF');

Route::resource('/personals', PersonalController::class)->names('personals')->middleware('auth');
//Route::get('/personals/pase_lista/{peronal_id}/{peronal_name}', [PersonalController::class, 'PaseLista'])->name('personal.pase_lista');
Route::get('/personals/pase_lista/{peronal_id}/{personal_name}', function($personal_id, $personal_name){
    return view('personal.fields-asistencia')
        ->with($personal_id)
        ->with($personal_name);
})->name('personal.pase_lista');

Route::get('/profile/{user_id}', function($user_id){
    return view('admin.profile')->with('user_id', $user_id);
});

Route::resource('/razon-socials', RazonSocialController::class)->names('razon-socials')->middleware('auth');

Route::resource('/roles', RoleController::class)->middleware('auth');

Route::resource('/sigla-asistencias-personals', SiglaAsistenciasPersonalController::class)->names('sigla-asistencias-personals')->middleware('auth');

Route::resource('/tipos-de-pago', PaymentTypeController::class)->names('tipos_pagos')->middleware('auth');

Route::resource('/users', UserController::class)->names('users')->middleware('auth');
