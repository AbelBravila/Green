<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

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

    public function register(Request $request)
    {
        $data = $request->validate([
            'NOMBRE' => 'required|string|max:50',
            'CORREO' => 'required|string|email|max:75|unique:usuario',
            'TELEFONO' => 'required|string|max:15',
            'DIRECCION' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);
        $data = Usuario::create([
            'NOMBRE' => $data['NOMBRE'],
            'CORREO' => $data['CORREO'],
            'TELEFONO' => $data['TELEFONO'],
            'DIRECCION' => $data['DIRECCION'],
            'password' => Hash::make($data['password']),
            'ID_ROL' => 2,
        ]);
        Auth::login($data);
        event(new Registered($data));
        return response()->json(['message' => 'Registration successful. Check your email to verify your account.']);

    }

    public function login(Request $request) {}


    public function logout() {}
}
