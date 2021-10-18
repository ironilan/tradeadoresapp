<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use App\Models\Accionrentable;
use App\Models\Entrada;
use App\Models\Operacion;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $iduser = Auth::user()->id;
        //$entradas = Entrada::orderBy('id', 'desc')->get();
        //$accionesrentables = Accionrentable::orderBy('id', 'desc')->get();
        $operaciones_abiertas = Operacion::where('user_id', $iduser)->where('estado', 'abierto')->count();
        $rentanilidad = Operacion::where('user_id', $iduser)->sum('rentabilidad');
        return view('dashboard', compact('rentanilidad', 'operaciones_abiertas'));
    }

    public function conversor()
    {
        $acciones = Accion::orderBy('nombre', 'asc')->get();

        if (Auth::user()->estado == 'suspendido')
        {
            return redirect('dashboard');
        }
        
        return view('conversor', compact('acciones'));
    }

    public function portfolio()
    {
        $acciones = Accion::orderBy('nombre', 'asc')->get();

        if (Auth::user()->estado == 'suspendido')
        {
            return redirect('dashboard');
        }

        return view('portfolio', compact('acciones'));
    }

    public function settings()
    {
        $user = Auth::user();
        return view('settings', compact('user'));
    }
}
