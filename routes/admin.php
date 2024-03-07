<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Routing\Controllers\Middleware;

Route::get('', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'home']);
//route::get('/dashboard', [HoomeController::class, 'dashboard']);
route::get('/users', [UserController::class, 'index']);