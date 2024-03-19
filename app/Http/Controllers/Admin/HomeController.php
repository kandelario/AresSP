<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function index()
    {
        return view('admin.index');
    }
}
