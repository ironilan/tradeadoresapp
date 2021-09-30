@foreach ($entradas as $entrada)
    <tr>
        <td>
            @if ($entrada->movimiento == 'alza')
            <span class="buy-thumb"><i class="la la-arrow-up"></i></span>
            @else
            <span class="sold-thumb"><i class="la la-arrow-down"></i></span>
            @endif
        </td>
        <td>
            <span class="badge badge-danger">{{$entrada->movimiento}}</span>
        </td>
        <td>
            <img src="{{$entrada->accion->imagen}}" alt="" style="width: 50px;">
            <h5 class="d-inline-block ms-2 mb-3">{{$entrada->accion->nombre_completo}}
            </h5>
        </td>
        <td>
            {{$entrada->precio_entrada}}
        </td>
        <td >{{$entrada->precio_salida}}</td>
        <td>{{Carbon\Carbon::parse($entrada->fecha)->format('d/m/Y H:i')}}</td>
    </tr>
    @endforeach