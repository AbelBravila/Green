<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('app.front.index');
    }
    public function about()
    {
        return view('app.front.about');
    }
    public function dashboard()
    {
        return view('app.front.dashboard');
    }
}
