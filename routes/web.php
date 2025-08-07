<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\LoginController;

// Rutas públicas
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/servicios', [ServiciosController::class, 'index'])->name('services.index');

// Ruta al dashboard que requiere autenticación y verificación de email
Route::get('/dashboard', [HomeController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Incluye todas las rutas de autenticación de Breeze (login, registro, verificación, etc.)
require __DIR__.'/auth.php';
