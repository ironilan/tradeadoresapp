<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use App\Models\Accionrentable;
use App\Models\Entrada;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        //$entradas = Entrada::orderBy('id', 'desc')->get();
        //$accionesrentables = Accionrentable::orderBy('id', 'desc')->get();
        return view('dashboard');
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
