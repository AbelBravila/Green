<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\LoginController;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/servicios', [ServiciosController::class, 'index'])->name('services.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [LoginController::class, 'registervw'])->name('register.index');
