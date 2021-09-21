<?php

namespace App\Http\Controllers;

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
        return view('portfolio');
    }

    public function settings()
    {
        return view('settings');
    }
}
