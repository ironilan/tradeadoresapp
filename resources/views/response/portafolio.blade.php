<table class="table mb-0 table-responsive-sm">
    <tbody>
        <tr style="background: #03001955;">
            <th>Acción</th>
            <th>P. Entrada</th>
            <th>P. Salida </th>
            
            <th>Movimiento</th>
            <th>Porcentaje</th>
            <th>Lotaje</th>
            <th>Rentabilidad</th>
            <th>P. Actual</th>
            <th>Estado</th>
        </tr>
        @foreach ($operaciones as $operacion)
        <tr>            
            <td>
                <img src="{{$operacion->accion->imagen}}" alt="" style="width: 65px;"><br>
                <span>{{$operacion->accion->nombre}}</span>
            </td>                                            

            <td>{{$operacion->precio_entrada}}</td>

            <td>{{$operacion->precio_salida}}</td>
           
            <td>
                @if ($operacion->movimiento == 'baja')
                <span class="badge badge-danger">
                    <i class="la la-arrow-down"></i>Baja
                </span>
                @else
                <span class="badge badge-danger">
                    <i class="la la-arrow-up"></i>Alza
                </span>
                @endif
            </td>
            <td>{{$operacion->porcentaje}}%</td>
            <td>{{$operacion->lotaje}}</td>
            <td class="text-danger"> {{$operacion->rentabilidad}}</td>
            <td>{{$operacion->precio_actual}}</td>
         
            <td>{{$operacion->estado}}</td>
             <td>
                <div class="edit-option">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modalcalculator" onclick="obtenerId({{$operacion->id}})"><i class="fa fa-calculator"></i></a>           
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modaleditar" onclick="edit({{$operacion->id}})"><i class="fa fa-pencil"></i></a>
                    <a href="javascript:void(0)" onclick="eliminar({{$operacion->id}})"><i class="fa fa-trash"></i></a>
                </div>
            </td>
            
        </tr>
        @endforeach
        
        
    </tbody>
</table>