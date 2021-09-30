<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Auth;

class UsuarioController extends Controller
{
    public function getInversion()
    {
        $user = Auth::user();

        return response()->json($user->inversion, 200);
    }

    public function setInversion(Request $request)
    {
        $this->validate($request, [
            'inversion' => 'required'
        ]);

        $user = Auth::user();
        $user->inversion = $request->inversion;
        $user->save();

        return response()->json($user, 200);
    }


    public function setPerfil(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required',
            'cumple' => 'required',
            'inversion' => 'required',
        ]);

        $user = Auth::user();

        if ($request->file('foto')) {
            $url = Storage::put('public', $request->file('foto'));

            $user->foto = $url;
        }

               
        $user->name = $request->nombre;
        $user->email = $request->email;
        $user->cumple = $request->cumple;
        
        $user->inversion = $request->inversion;
        if($request->password)
        {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        $foto = Storage::url($user->foto);

        return response()->json(['user' =>$user, 'foto' => $foto], 200);
    }
}
