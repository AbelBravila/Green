<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('app.front.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
           'NOMBRE' => 'required|string|max:50',
            'CORREO' => 'required|string|email|max:75|unique:usuario,CORREO',
            'TELEFONO' => 'required|string|max:15',
            'DIRECCION' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'NOMBRE' => $request->NOMBRE,
            'CORREO' => $request->CORREO,
            'TELEFONO' => $request->TELEFONO,
            'DIRECCION' => $request->DIRECCION,
            'PASSWORD' => Hash::make($request->password),
            'ID_ROL' => 4,
            'FECHA_CREACION' => now(),
            'FECHA_MODIFICACION' => now(),
            'ESTADO' => 'A',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
