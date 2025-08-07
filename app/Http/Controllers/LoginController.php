<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

 /*   public function register(Request $request)
    {
        $data = $request->validate([
            'NOMBRE' => 'required|string|max:50',
            'CORREO' => 'required|string|email|max:75|unique:usuario,CORREO',
            'TELEFONO' => 'required|string|max:15',
            'DIRECCION' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'NOMBRE' => $data['NOMBRE'],
            'CORREO' => $data['CORREO'],
            'TELEFONO' => $data['TELEFONO'],
            'DIRECCION' => $data['DIRECCION'],
            'PASSWORD' => bcrypt($data['password']),
            'ID_ROL' => 4,
            'FECHA_CREACION' => now(),
            'FECHA_MODIFICACION' => now(),
            'ESTADO' => 'A',
        ]);

        Auth::login($user);

        event(new Registered($user)); // 🚀 Esto dispara el envío del correo automáticamente
        return redirect()->route('verification.notice');
    }
*/
    public function login(Request $request) {}


    public function logout() {}
}
