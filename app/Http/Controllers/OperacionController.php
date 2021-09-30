<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use App\Models\Operacion;
use Auth;
use Illuminate\Http\Request;

class OperacionController extends Controller
{
    public function listar()
    {
        $user = Auth::user();
        $operaciones = Operacion::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        return view('response.portafolio', compact('operaciones'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'accion' => 'required',
            'movimiento' => 'required',
            'precio_entrada' => 'required',
            'precio_salida' => 'required',
            'lotaje' => 'required',
        ]);

        $user = Auth::user();

        $operacion = new Operacion;
        $operacion->precio_entrada = $request->precio_entrada;
        $operacion->precio_salida = $request->precio_salida;
        $operacion->lotaje = $request->lotaje;
        $operacion->movimiento = $request->movimiento;
        $operacion->accion_id = $request->accion;
        $operacion->estado = 'abierto';        
        $operacion->user_id = $user->id;


        $precioActual = $request->precio_entrada;

        //rentabilidad
        if ($request->precio_entrada > $request->precio_salida) {
            $rentabilidad = $request->lotaje*100*($request->precio_salida - $precioActual);
        }else{
            $rentabilidad = $request->lotaje*100*($precioActual - $request->precio_salida);
        }

        $capital = $user->inversion;
        //porcentaje
        $porcentaje = $rentabilidad / $capital * 100;
        


        $operacion->porcentaje = $porcentaje;
        $operacion->rentabilidad = $rentabilidad;
        $operacion->precio_actual = $precioActual;

        $operacion->save();


        return response()->json($operacion, 200);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'estado' => 'required',
            'precio_actual' => 'required',
            'precio_salida' => 'required',
            'id' => 'required',
        ]);

        $user = Auth::user();
        $operacion = Operacion::find($request->id);
        $estado = $request->estado;
        $precioActual = $request->precio_actual;
        $precioSalida = $request->precio_salida;

        $precioEntrada = $operacion->precio_entrada;
        $movimiento = $operacion->movimiento;
        
        $lotaje = $operacion->lotaje;
        

        //rentabilidad
        if ($precioEntrada > $precioSalida) {
            $rentabilidad = $lotaje*100*($precioSalida - $precioActual);
        }else{
            $rentabilidad = $lotaje*100*($precioActual - $precioSalida);
        }

        $capital = $user->inversion;
        //porcentaje
        $porcentaje = $rentabilidad / $capital * 100;
        


        //$operacion->precio_entrada = $request->precio_entrada;
        $operacion->precio_salida = $request->precio_salida;
        //$operacion->lotaje = $request->lotaje;
        //$operacion->movimiento = $request->movimiento;
        //$operacion->accion_id = $request->accion;
        $operacion->estado = $estado;        
        //$operacion->user_id = $user->id;
        $operacion->porcentaje = $porcentaje;
        $operacion->rentabilidad = $rentabilidad;
        $operacion->precio_actual = $precioActual;

        $operacion->save();


        return response()->json($operacion, 200);
    }

    public function show($id)
    {
        $operacion = Operacion::find($id);

        return response()->json($operacion, 200);
    }

    public function delete(Request $request)
    {
        $operacion = Operacion::find($request->id);
        $operacion->delete();

        return response()->json(['msj' => 'se ha eliminado con éxito.'], 200);
    }

    public function parcial1(Request $request)
    {

        $operacion = Operacion::find($request->id);

        $dif_precios = ( $request->parcial1 / 100 ) * ($operacion->precio_entrada - $operacion->precio_salida) / 0.6;

        $puntos = $operacion->precio_entrada  + $dif_precios;

        $datos = [
            'puntos' => $puntos,
            'dif_precios' => $dif_precios,
        ];

        return response()->json($datos, 200);
    }


    public function puntos2(Request $request)
    {

        $operacion = Operacion::find($request->id);

        $dif_precios = $request->puntos - $operacion->precio_entrada;

        $parcial = 0.6 * $dif_precios / ($operacion->precio_entrada - $operacion->precio_salida);

        $datos = [
            'dif_precios' => $dif_precios,
            'parcial' => $parcial,
        ];

        return response()->json($datos, 200);
    }



    /****************************/
    public function convertir(Request $request)
    {
        $this->validate($request, [
            'accion' => 'required',
            'capital' => 'required',
            'precio_entrada' => 'required',
            'precio_salida' => 'required',
        ]);

        $accion = Accion::find($request->accion);
        $user = Auth::user();

        $nombre = $accion->nombre_completo;
        $simbolo = $accion->simbolo;
        $capital = $request->capital;
        $precio_entrada = $request->precio_entrada;
        $precio_salida = $request->precio_salida;

        $precioEntrada2 = $precio_entrada - (($precio_entrada - $precio_salida) / 2);
        $stopLoss = $precio_salida.' USD';

        if ($precio_entrada > $precio_salida) {
            $lotaje = 0.01*((0.6 * $user->inversion * 0.1) / ($precio_entrada - $precio_salida));
        }else{
            $lotaje = -0.01*((0.6 * $user->inversion * 0.1) / ($precio_entrada - $precio_salida));   
        }
        


        $datos = [
            'nombre' => $nombre,
            'simbolo' => $simbolo,
            'precioEntrada1' => $precio_entrada,
            'precioEntrada2' => $precioEntrada2,
            'stopLoss' => $stopLoss,
            'lotaje' => $lotaje,
        ];

        return response()->json($datos, 200);
    }
}
