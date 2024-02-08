<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function create(){
        return view('user.create');
    }

    public function show(){
        return view('user.show');
    }

    public function update(){
        return view('user.update');
    }

    public function destroy(){
        return view('user.destroy');
    }
}
