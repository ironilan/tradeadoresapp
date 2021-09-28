@extends('layouts.dashboard')
@section('contenido')

<div class="page_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page_title-content">
                            <p>Welcome Back,
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
                                <form action="verify-step-6.html" class="identity-upload p4">
                                    <div class="row">
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Nombre de la acción </label>
                                            <input type="text" class="form-control" placeholder="25487">
                                        </div>

                                        <div class="mb-3 col-xl-12">
                                           <label class="me-sm-2">Movimiento</label>
                                                    <div class="input-group mb-3">
                                                        
                                                        <select name='currency' class="form-control">
                                                            <option value="">Selecciona</option>
                                                            <option value="bitcoin">Alza</option>
                                                            <option value="litecoin">Baja</option>
                                                        </select>
                                                    </div>
                                        </div>
                                        
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Precios</label>
                                            <div class="input-group">
                                                        <input type="text" name="currency_amount" class="form-control"
                                                            placeholder="Entrada">
                                                        <input type="text" name="usd_amount" class="form-control"
                                                            placeholder="Salida">
                                            </div>
                                        </div>
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Lotaje</label>
                                            <input type="text" class="form-control" placeholder="Maria Pascle">
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
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-responsive-sm">
                                            <tbody>
                                                <tr style="background: #03001955;">
                                                    <th>Simbolo</th>
                                                    <th>P. Entrada</th>
                                                    <th>P. Salida 1</th>
                                                    <th>P. Salida 2</th>
                                                    <th>Movimiento</th>
                                                    <th>Porcentaje</th>
                                                    <th>Lotaje</th>
                                                    <th>Rentabilidad</th>
                                                    <th>P. Actual</th>
                                                    <th>Estado</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="cc BTC"></i> AAPL
                                                    </td>                                            

                                                    <td>0.125 USD</td>

                                                    <td>0.125 USD</td>
                                                    <td>-0.125 USD</td>
                                                    <td>
                                                        <span class="badge badge-danger"><i class="la la-arrow-down"></i>Baja</span>
                                                    </td>
                                                    <td>0.125 USD</td>
                                                    <td>0.125 USD</td>
                                                    <td class="text-danger">-0.000242</td>
                                                    <td>0.125 USD</td>
                                                 
                                                    <td>TMR</td>
                                                    <td>
                                                        <div class="edit-option">
                                                            <a href="#"><i class="fa fa-eye"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="cc BTC"></i> AAPL
                                                    </td>                                            

                                                    <td>0.125 USD</td>

                                                    <td>0.125 USD</td>
                                                    <td>-0.125 USD</td>
                                                    <td>
                                                        <span class="badge badge-danger"><i class="la la-arrow-up"></i>Alza</span>
                                                    </td>
                                                    <td>0.125 USD</td>
                                                    <td>0.125 USD</td>
                                                    <td class="text-success">-0.000242</td>
                                                    <td>0.125 USD</td>
                                                 
                                                    <td>TMR</td>
                                                     <td>
                                                        <div class="edit-option">                                                          
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">Alza</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc LTC"></i> LTC
                                                    </td>
                                                    <td>
                                                        Using - Card *******8475
                                                    </td>
                                                    <td class="text-success">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection