<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function conversor()
    {
        return view('conversor');
    }

    public function portfolio()
    {
        $acciones = Accion::orderBy('nombre', 'asc')->get();
        return view('portfolio', compact('acciones'));
    }

    public function settings()
    {
        return view('settings');
    }
}
