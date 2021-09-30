@extends('layouts.dashboard')
@section('contenido')



<div class="page_title">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page_title-content">
                    <p>Bienvenido(a),
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
            <div class="col-xl-3 col-lg-4 col-xxl-4">
                <div class="card balance-widget">
                    <div class="card-header border-0 py-0 text-center">
                        <h4 class="card-title text-center">Cuenta de Trading</h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="balance-widget">
                            <div class="total-balance">
                                <h3>$ <span class="setInversion">{{Auth::user()->inversion}}</span></h3>
                                <h6>Capital Total</h6>
                            </div>
                            <ul class="list-unstyled">
                                <li class="d-flex">
                                    
                                    <div class="flex-grow-1">
                                        <h5 class="m-0">Inversión</h6>
                                    </div>
                                    <div class="text-end">
                                 
                                        <span><span class="setInversion">{{Auth::user()->inversion}}</span> USD <a href="#" data-toggle="modal" data-target="#modaleditar" onclick="getInversion()"><i class="fa fa-pencil"></i></a></span>
                                    </div>
                                </li>
                                <li class="d-flex">
                            
                                    <div class="flex-grow-1">
                                        <h5 class="m-0">Invertido</h6>
                                    </div>
                                    <div class="text-end">
                                        <h5>0.000242 LTC</h5>
                                   
                                    </div>
                                </li>
                                <li class="d-flex">
                 
                                    <div class="flex-grow-1">
                                        <h5 class="m-0">Rentabilidad</h6>
                                    </div>
                                    <div class="text-end">
                                        <h5>0.000242 XRP</h5>
                       
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-8 col-xxl-8">
                <div class="card profile_chart">
                    
                    <div class="card-body">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                          <div id="tradingview_a4cad"></div>
                          <div class="tradingview-widget-copyright"><a href="https://es.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Gráfico</span></a> por TradingView</div>
                          <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                          <script type="text/javascript">
                          new TradingView.widget(
                          {
                          //"width": 980,
                          "height": 410,
                          "symbol": "NASDAQ:AAPL",
                          "interval": "D",
                          "timezone": "Etc/UTC",
                          "theme": "light",
                          "style": "1",
                          "locale": "es",
                          "toolbar_bg": "#f1f3f6",
                          "enable_publishing": false,
                          "allow_symbol_change": true,
                          "container_id": "tradingview_a4cad"
                        }
                          );
                          </script>
                        </div>
                        <!-- TradingView Widget END -->
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-xxl-12">
                <div class="card">
                    <div class="card-header border-0 py-0">
                        <h4 class="card-title">Las más rentables</h4>
                    </div>
                    <div class="card-body">
                        <div class="row" id="responseAcciones">
                                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
           
            <div class="col-xl-12 col-lg-12 col-xxl-12">
                <div class="card">
                    <div class="card-header border-0 py-0">
                        <h4 class="card-title">Últimas Entradas</h4>
                        {{-- <a href="#">Ver todos </a> --}}
                    </div>
                    <div class="card-body">
                        <div class="transaction-table">
                            <div class="table-responsive">
                                <table class="table mb-0 table-responsive-sm">
                                    <tbody>
                                        <tr>
                                            <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                            </td>

                                            <td class="text-primary">
                                                Movimiento
                                            </td>
                                            <td class="text-primary">
                                                 Accion
                                            </td>
                                            <td class="text-primary">
                                                Precio de entrada
                                            </td>
                                            <td class="text-primary"> Precio de salida</td>
                                            <td class="text-primary">Fecha</td>
                                        </tr>
                                        
                                        
                                    </tbody>

                                    <tbody id="responseEntradas">
                                        
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

@section('modal')
<div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog " role="document">
        <div class="modal-content" style="background: #3a3361;">
            <div class="modal-body" >
                <div class="">
                    <div class="container-fluid">
                        <div class="card settings_menu">
                            <div class="card-header">
                                <h4 class="card-title">Editar Inversión</h4>
                            </div>
                            <div class="card-body">
                                <form id="editarInversion" class="identity-upload p4" autocomplete="off">
                                    <input type="hidden" name="id" id="editId">
                                    <div class="row">
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Inversión o capital</label>
                                            <input type="text" class="form-control" id="inversion" name="inversion" >
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
@endsection

@section('scripts')
<script>
    $('#editarInversion').submit(function(e){
        e.preventDefault();
        
        let token = '{{ csrf_token() }}';
        let data = new FormData(document.getElementById("editarInversion"));
        let url = '{{ url('setInversion') }}';
        
        $.ajax({
            headers: { 'X-CSRF-TOKEN': token },
            url: url,
            type: 'POST',
            contentType: false,
            data: data,
            processData: false,
            success: res => {
                $('#modaleditar').modal('hide');
                $('body').removeClass('modal-open');
                $('.setInversion').empty().append(res.inversion);
                //listarEntradas();
                //listarAcciones();
            },
            error: error => {
                console.log(error);
            }
        });
    });


    const listarEntradas = () => {
        let url = '{{ url('listarEntradas') }}';
        $.get(url, (res) => {
            $('#responseEntradas').html(res);
        });
    }


    const listarAcciones = () => {
        let url = '{{ url('listarAcciones') }}';
        $.get(url, (res) => {
            $('#responseAcciones').html(res);
        });
    }


    const getInversion = () => {
        let url = '{{ url('getInversion') }}';
        $.get(url, (res) => {
            $('#inversion').val(res);
        });
    }


    $(document).ready(() => {
        listarEntradas();
        listarAcciones();
    });
</script>
@endsection
