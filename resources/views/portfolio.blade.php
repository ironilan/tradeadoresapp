@extends('layouts.dashboard')
@section('contenido')

<div class="page_title">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page_title-content">
                    <p>Bienvenido (a),
                        <span> {{Auth::user()->name}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                
                <div class="auth-form card">
                    <div class="card-header">
                        <h4 class="card-title">AGREGAR OPERACIÓN</h4>
                    </div>
                    <div class="card-body p-2">
                        <form id="formProtafolio" class="identity-upload p4">
                            <div class="row">
                                <div class="mb-3 col-xl-12">
                                    <label class="me-sm-2">Nombre de la acción </label>
                                    <div class="input-group mb-3">
                                        
                                        <select name='accion' class="form-control">
                                            <option value="">Selecciona</option>
                                            @foreach ($acciones as $accion)
                                            <option value="{{$accion->id}}">{{$accion->simbolo}} | {{$accion->nombre_completo}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 col-xl-12">
                                   <label class="me-sm-2">Movimiento</label>
                                    <div class="input-group mb-3">
                                        
                                        <select name='movimiento' class="form-control">
                                            <option value="">Selecciona</option>
                                            <option value="alza">Alza</option>
                                            <option value="baja">Baja</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="mb-3 col-xl-12">
                                    <label class="me-sm-2">Precios</label>
                                    <div class="input-group">
                                                <input type="text" name="precio_entrada" class="form-control"
                                                    placeholder="Entrada">
                                                <input type="text" name="precio_salida" class="form-control"
                                                    placeholder="Salida">
                                    </div>
                                </div>
                                <div class="mb-3 col-xl-12">
                                    <label class="me-sm-2">Lotaje</label>
                                    <input type="text" class="form-control" placeholder="" name="lotaje">
                                </div>
                               
                               

                                <div class="text-center col-12">
                              
                                    <button type="submit" class="btn btn-success mx-2 waves-effect">Agregar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-lg-4">
                
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="card-title">Mis Operaciones</h4>
                        <h6 class="btn btn-success">Agregar Operación</h6>
                    </div>
                    <div class="card-body pt-0">
                        <div class="transaction-table">
                            <div class="table-responsive" id="responseOperaciones">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog " role="document">
        <div class="modal-content" style="background: #3a3361;">
            <div class="modal-body" >
                <div class="">
                    <div class="container-fluid">
                        <div class="card settings_menu">
                            <div class="card-header">
                                <h4 class="card-title">Editar Operación</h4>
                            </div>
                            <div class="card-body">
                                <form id="editarPortafolio" class="identity-upload p4">
                                    <input type="hidden" name="id" id="editId">
                                    <div class="row">
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Precio Actual </label>
                                            <input type="text" class="form-control" id="editPrecioEntrada" name="precio_actual">
                                        </div>
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Precio Salida </label>
                                            <input type="text" class="form-control" id="editPrecioSalida" name="precio_salida">
                                        </div>
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Estado</label>
                                            <select name="estado" class="form-control" id="estadoEdit">
                                                <option value="">Selecciona</option>
                                                <option value="abierto">Abierto</option>
                                                <option value="cerrado">Cerrado</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="text-center col-12">
                                            <button type="submit" class="btn btn-success mx-2 waves-effect">Actualizar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalcalculator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #3a3361;">
         
          <div class="modal-body" >
            

                <div class="">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-7 col-md-7 ">
                                <div class="card settings_menu">
                                    <div class="card-header">
                                        <h4 class="card-title">Porcentajes Parciales</h4>
                                    </div>
                                    <input type="hidden" id="idoperacion">
                                    <div class="card-body">
                                        <div class="form">
                                            <div class="d-flex pb-4">                            
                                                <div class="flex-grow-1">
                                                    <h5 class="mt-0 mb-1">Dif. Precios</h5>       
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="mt-0 mb-1">Puntos MT5</h5>
                                                                
                                                </div>
                                                <div class="edit-option">
                                                    <h5 class="mt-0 mb-1">% Parcial</h5>
                                                </div>
                                                <div class="edit-option">
                                                    
                                                </div>
                                            </div>
                                            
                                            <ul class="linked_account">
                                              
                                                <li class="pb-2">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <div class="d-flex">
                                                               
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1" id="difPrecio1">00.00</h5>
                                                                    
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1" id="puntos1">-</h5>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-3">                                                            
                                                                <input type="text" name="parcial1" class="form-control" placeholder="60" id="parcial1">                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <div class="d-flex">
                                                               
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1" id="difPrecio2">00.00</h5>
                                                                    
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    
                                                                     <input style="text-align: center; width: 80%; margin: 0 40px;" type="text" name="puntos2" class="form-control " placeholder="400" id="puntos2">
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-3">                                       
                                                            <h5 class="mt-0 mb-1" id="parcial2"> 00.00</h5>                     
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>

                                          
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-5">
                                <div class="card ml-1" style="margin-left: 44px;">
                                    <div class="card-header">
                                        <h4 class="card-title">Plan Trading</h4>
                                    </div>
                                    
                                    <div class="card-body">
                                        <div class="form">
                                            <div class="d-flex pb-4">                                                       
                                                        <div class="flex-grow-1">
                                                            <h5 class="mt-0 mb-1">Trailing Stop</h5>
                                                                        
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="mt-0 mb-1">Precio</h5>
                                                                        
                                                        </div>
                                                       
                                            </div>
                                            <ul class="linked_account">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1">0%</h5>                                  
                                                                </div>
                                                                <div class="flex-grow-1 text-center">
                                                                    <h5 class="mt-0 mb-1">30%</h5>                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1">20%</h5>                                  
                                                                </div>
                                                                <div class="flex-grow-1 text-center">
                                                                    <h5 class="mt-0 mb-1">50%</h5>                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </li>
                                                 <li>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1">50%</h5>                                  
                                                                </div>
                                                                <div class="flex-grow-1 text-center">
                                                                    <h5 class="mt-0 mb-1">90%</h5>                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </li>
                                                 <li>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1">90%</h5>                                  
                                                                </div>
                                                                <div class="flex-grow-1 text-center">
                                                                    <h5 class="mt-0 mb-1">140%</h5>                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1">140%</h5>                                  
                                                                </div>
                                                                <div class="flex-grow-1 text-center">
                                                                    <h5 class="mt-0 mb-1">200%</h5>                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1">200%</h5>                                  
                                                                </div>
                                                                <div class="flex-grow-1 text-center">
                                                                    <h5 class="mt-0 mb-1">260%</h5>                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </li>
                                                
                                            </ul>

                                           
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Aceptar</button> --}}
          </div>
        </div>
      </div>
    </div>
@endsection

@section('scripts')
<script>
    const listar = () => {
        let url = '{{ url('listarOperaciones') }}';
        $.get(url, (res) => {
            $('#responseOperaciones').html(res);
        });
    }


    $('#formProtafolio').submit(function(e){
        e.preventDefault();
        
        let token = '{{ csrf_token() }}';
        let data = new FormData(document.getElementById("formProtafolio"));
        let url = '{{ url('operaciones') }}';
        
        $.ajax({
            headers: { 'X-CSRF-TOKEN': token },
            url: url,
            type: 'POST',
            contentType: false,
            data: data,
            processData: false,
            success: res => {
               console.log('successss'); 
               listar();
            },
            error: error => {
                console.log(error);
            }
        });
    });


    const edit = idoperacion =>{
        let url = '{{ url('operaciones') }}/'+idoperacion;
        $.get(url, (res) => {
            $('#editPrecioEntrada').val(res.precio_entrada);
            $('#editPrecioSalida').val(res.precio_salida);
            $('#estadoEdit').val(res.estado);
            $('#editId').val(res.id);
        }); 
    }


    const obtenerId = id =>{
        $('#idoperacion').val(id);
    }


    const eliminar = idoperacion =>{
        let url = '{{ url('operacionesDelete') }}?id='+idoperacion;
        $.get(url, (res) => {
            listar();
        }); 
    }


    $('#parcial1').on('keypress', function(e){
        let id = $('#idoperacion').val();
        let parcial1 = $('#parcial1').val();
        if(e.which == 13) {
            let url = `{{ url('porcentajeParcial1') }}?parcial1=${parcial1}&id=${id}`;
            $.get(url, (res) => {
                $('#difPrecio1').empty().append(res.dif_precios.toFixed(2));
                $('#puntos1').empty().append(res.puntos.toFixed(2));
            });
        }
    });


    $('#puntos2').on('keypress', function(e){
        let id = $('#idoperacion').val();
        let puntos2 = $('#puntos2').val();
        if(e.which == 13) {
            let url = `{{ url('puntos2') }}?puntos=${puntos2}&id=${id}`;
            $.get(url, (res) => {
                $('#difPrecio2').empty().append(res.dif_precios.toFixed(2));
                $('#parcial2').empty().append(res.parcial.toFixed(2));
            });
        }
    });


    $('#editarPortafolio').submit(function(e){
        e.preventDefault();
        
        let token = '{{ csrf_token() }}';
        let data = new FormData(document.getElementById("editarPortafolio"));
        let url = '{{ url('operacionesUpdate') }}';
        
        $.ajax({
            headers: { 'X-CSRF-TOKEN': token },
            url: url,
            type: 'POST',
            contentType: false,
            data: data,
            processData: false,
            success: res => {
            
               listar();
            },
            error: error => {
                console.log(error);
            }
        });
    });


    $(document).ready(() => {
        listar();
    });
</script>
@endsection