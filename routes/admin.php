<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Routing\Controllers\Middleware;

Route::get('', [HomeController::class, 'index']);
Route::get('/home', function(){
    return view('home');
});