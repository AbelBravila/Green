<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\LoginController;
//correo
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

    
/*Route::get('/', function () {
    return view('welcome');
});*/

// Ruta que recibe el clic desde el correo
Route::get('/verify-email/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); // marca el usuario como verificado

    return redirect('/login'); // o donde quieras redirigirlo
})->middleware(['auth', 'signed'])->name('verification.verify');

// Ruta para reenviar el correo
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Correo de verificación reenviado.');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/verifica-tu-correo', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('auth', 'verified')->name('dashboard');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('services.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'registervw'])->name('register.index');
Route::post('/register', [LoginController::class, 'register'])->name('register.usuario');



// Ruta para mostrar la vista de verificación
/*Route::get('/email/verify', function () {
    return view('auth.verify-email'); // Asegúrate de tener esta vista
})->middleware('auth')->name('verification.notice');

// Ruta que se activa cuando el usuario hace clic en el enlace del correo
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); // Marca el correo como verificado
    return redirect('/home'); // Redirige a donde tú prefieras
})->middleware(['auth', 'signed'])->name('verification.verify');

// Ruta para reenviar el correo de verificación
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', '¡Correo de verificación enviado!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
*/