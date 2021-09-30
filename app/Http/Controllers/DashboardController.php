<?php

namespace App\Http\Controllers;

use App\Models\Accionrentable;
use App\Models\Entrada;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function listarEntradas()
    {
        
        $entradas = Entrada::orderBy('id', 'desc')->get();
        return view('response.entradas', compact('entradas'));
    }


    public function listarAcciones()
    {
        $accionesrentables = Accionrentable::orderBy('id', 'desc')->get();
        return view('response.accionesrentables', compact('accionesrentables'));
    }
}
