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
                    <div class="col-xl-5 col-lg-5 col-md-12 mt-2">
                        <div class="card auth-form p-4">
                            <div class="card-header">
                                <h4 class="card-title text-left">AGREGAR OPERACIÓN</h4>
                            </div>
                            <div class="card-body">
                                <div class="buy-sell-widget">
                                    
                                    <div class="">
                                        <div class=" fade show active" id="buy" >
                                            <form id="formConversor" class="currency_validate">
                                                <div class="mb-3">
                                                    <label class="me-sm-2">Acción</label>
                                                    <div class="input-group mb-3">
                                                        <select name='accion' class="form-control">
                                                            <option value="">Selecciona</option>
                                                            @foreach ($acciones as $accion)
                                                            <option value="{{$accion->id}}">{{$accion->simbolo}} | {{$accion->nombre_completo}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="me-sm-2">Capital</label>
                                                    <div class="input-group mb-3">
                                                       
                                                        
                                                        <input type="text" name="capital" class="form-control"
                                                            placeholder="0.0214 ">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="me-sm-2">Precios</label>
                                                    <div class="input-group">
                                                        <input type="text" name="precio_entrada" class="form-control"
                                                            placeholder="Entrada">
                                                        <input type="text" name="precio_salida" class="form-control"
                                                            placeholder="Salida">
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <p class="mb-0">Porcentaje de Stop Loss</p>
                                                        <h6 class="mb-0">60%</h6>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit"
                                                    class="btn btn-success btn-block">Calcular</button>

                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <p class="p-4">Recuerda que la regla principal para los inversionistas es: "No inviertas un dinero que no estas dispuesto a perder".</p>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="card">
                            <div class="card-body" style="margin-top: 0; padding-top: 0;">
                                <div class="buyer-seller">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td><span class="text-primary">Nombre</span></td>
                                                    <td><span class="text-primary" id="nombre">Apple - Apple Inc </span></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Simbolo</td>
                                                    <td id="simbolo">AAPL</td>
                                                </tr>
                                                <tr>
                                                    <td>Precio de entrada 1</td>
                                                    <td id="precioEntrada1">0.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Precio de entrada 2</td>
                                                    <td id="precioEntrada2">0.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Stop Loss General</td>
                                                    <td>
                                                        <div class="text-danger " id="stopLoss">0.00</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lotaje General</td>
                                                    <td id="lotaje"> 0.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Acc. Invertidos</td>
                                                    <td id="acc_invertidos"> 0.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">FAQ</h4>
                            </div>
                            <div class="card-body">
                                <div id="accordion-faq" class="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed c-pointer" data-toggle="collapse"
                                                data-target="#collapseOne1" aria-expanded="false"
                                                aria-controls="collapseOne1"><i class="fa" aria-hidden="true"></i>¿Quién es el principal y único responsable de mi cuenta?</h5>
                                        </div>
                                        <div id="collapseOne1" class="collapse show" data-parent="#accordion-faq">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                                La decisión y responsabilidad la tienes tú y solamente tú, lo que se comparte aquí son ideas que pueden o no funcionar.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed c-pointer" data-toggle="collapse"
                                                data-target="#collapseTwo2" aria-expanded="false"
                                                aria-controls="collapseTwo2"><i class="fa" aria-hidden="true"></i>¿En qué precio debo entrar a la operación?</h5>
                                        </div>
                                        <div id="collapseTwo2" class="collapse" data-parent="#accordion-faq">
                                            <div class="card-body">Nosotros te compartimos una estrategia y unos puntos aproximados, pero tú al final decides en qué precio entrar, podrías tomarlo siempre que los precios no estén lejos de lo recomendado.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed c-pointer" data-toggle="collapse"
                                                data-target="#collapseThree3" aria-expanded="false"
                                                aria-controls="collapseThree3"><i class="fa" aria-hidden="true"></i>¿Cuánto debería invertir por cada acción?</h5>
                                        </div>
                                        <div id="collapseThree3" class="collapse" data-parent="#accordion-faq">
                                            <div class="card-body">La mejor forma de manejar tu riesgo va a ser teniendo un plan de trading, los precios y lotes que se muestran son predeterminados a un % de riesgo pero tú puedes modificarlo cuando quieras.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed c-pointer" data-toggle="collapse"
                                                data-target="#collapseThree4" aria-expanded="false"
                                                aria-controls="collapseThree4"><i class="fa" aria-hidden="true"></i>¿Puedo operar cuando el mercado esté cerrado?</h5>
                                        </div>
                                        <div id="collapseThree4" class="collapse" data-parent="#accordion-faq">
                                            <div class="card-body">No, solo cuando el Mercado está abierto té permitirá abrir y cerrar operaciones, fíjate bien la hora de tu país en relación al Mercado que operamos para que calcules tu tiempo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed c-pointer" data-toggle="collapse"
                                                data-target="#collapseThree5" aria-expanded="false"
                                                aria-controls="collapseThree5"><i class="fa" aria-hidden="true"></i>¿Qué broker puedo usar?</h5>
                                        </div>
                                        <div id="collapseThree5" class="collapse" data-parent="#accordion-faq">
                                            <div class="card-body">El broker es a libre elección, debes asesorarte bien sobre la información de cada uno de ellos y tomar tu mejor decisión.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="intro-video-play">
                            <div class="play-btn">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=IjzUwnqWc5Q">
                                    <span><i class="fa fa-play"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
@endsection


@section('scripts')
<script>
    $('#formConversor').submit(function(e){
        e.preventDefault();
        
        let token = '{{ csrf_token() }}';
        let data = new FormData(document.getElementById("formConversor"));
        let url = '{{ url('convertir') }}';
        
        $.ajax({
            headers: { 'X-CSRF-TOKEN': token },
            url: url,
            type: 'POST',
            contentType: false,
            data: data,
            processData: false,
            success: res => {
                $('#nombre').empty().append(res.nombre);
                $('#simbolo').empty().append(res.simbolo);
                $('#precioEntrada1').empty().append(res.precioEntrada1);
                $('#precioEntrada2').empty().append(res.precioEntrada2.toFixed(2));
                $('#stopLoss').empty().append(res.stopLoss);
                $('#lotaje').empty().append(res.lotaje.toFixed(2));
                $('#acc_invertidos').empty().append(res.acc_invertidos.toFixed(3));
            },
            error: error => {
                console.log(error);
            }
        });
    });
</script>
@endsection