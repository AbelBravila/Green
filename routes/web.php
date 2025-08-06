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
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth', 'verified');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('services.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [LoginController::class, 'registervw'])->name('register.index');
Route::post('/register', [LoginController::class, 'register'])->name('register.usuario');

//correo
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// Ruta para mostrar la vista de verificación
Route::get('/email/verify', function () {
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