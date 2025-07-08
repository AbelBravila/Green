<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        // Aquí puedes agregar la lógica para obtener los servicios
        // Por ejemplo, si tienes un modelo Servicio, podrías hacer algo como:
        // $servicios = Servicio::all();

        // Retorna la vista con los servicios
        return view('app.front.service'); // Asegúrate de que esta vista exista
    }
}
