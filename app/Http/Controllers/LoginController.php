<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('app.front.login');
    }
    public function registervw()
    {
        return view('app.front.register');
    }
}

