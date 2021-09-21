@extends('layouts.dashboard')
@section('contenido')

<div class="page_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page_title-content">
                            <p>Bienvenido,
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
                                            <form method="post" name="myform" class="currency_validate">
                                                <div class="mb-3">
                                                    <label class="me-sm-2">Acción</label>
                                                    <div class="input-group mb-3">
                                                        
                                                        <select name='currency' class="form-control">
                                                            <option value="">Nombre de la acción</option>
                                                            <option value="bitcoin">Bitcoin</option>
                                                            <option value="litecoin">Litecoin</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="me-sm-2">Capital</label>
                                                    <div class="input-group mb-3">
                                                       
                                                        
                                                        <input type="text" name="currency_amount" class="form-control"
                                                            placeholder="0.0214 BTC">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="me-sm-2">Precios</label>
                                                    <div class="input-group">
                                                        <input type="text" name="currency_amount" class="form-control"
                                                            placeholder="Entrada">
                                                        <input type="text" name="usd_amount" class="form-control"
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
                            <div class="card-body">
                                <div class="buyer-seller">
                                    <div class="d-flex  mb-3">
                                        
                                        <div class="seller-info text-center ">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h4>APPL</h4>
                                                    <h5>Apple Company sas</h5>
                                                  
                                                </div>
                                                <img class="ms-3" src="./images/profile/1.png" alt="" width="50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td><span class="text-primary">Nombre</span></td>
                                                    <td><span class="text-primary">Apple - Company Inc Mas Naki</span></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Simbolo</td>
                                                    <td>AAPL</td>
                                                </tr>
                                                <tr>
                                                    <td>Precio de entrada 1</td>
                                                    <td>1.20254322323</td>
                                                </tr>
                                                <tr>
                                                    <td>Precio de entrada 2</td>
                                                    <td>$1.5555555555555</td>
                                                </tr>
                                                <tr>
                                                    <td>Stop Loss General</td>
                                                    <td>
                                                        <div class="text-danger">$25.00 USD</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lotaje General</td>
                                                    <td> 0.55</td>
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
                                                aria-controls="collapseOne1"><i class="fa" aria-hidden="true"></i>What
                                                Shipping Methods are Available?</h5>
                                        </div>
                                        <div id="collapseOne1" class="collapse show" data-parent="#accordion-faq">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                                life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed c-pointer" data-toggle="collapse"
                                                data-target="#collapseTwo2" aria-expanded="false"
                                                aria-controls="collapseTwo2"><i class="fa" aria-hidden="true"></i>How
                                                Long Will it Take To Get My Package?</h5>
                                        </div>
                                        <div id="collapseTwo2" class="collapse" data-parent="#accordion-faq">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                                life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed c-pointer" data-toggle="collapse"
                                                data-target="#collapseThree3" aria-expanded="false"
                                                aria-controls="collapseThree3"><i class="fa" aria-hidden="true"></i>How
                                                Do I Track My Order?</h5>
                                        </div>
                                        <div id="collapseThree3" class="collapse" data-parent="#accordion-faq">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                                life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed c-pointer" data-toggle="collapse"
                                                data-target="#collapseThree4" aria-expanded="false"
                                                aria-controls="collapseThree4"><i class="fa" aria-hidden="true"></i>Do I
                                                Need A Account To Place Order?</h5>
                                        </div>
                                        <div id="collapseThree4" class="collapse" data-parent="#accordion-faq">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                                life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed c-pointer" data-toggle="collapse"
                                                data-target="#collapseThree5" aria-expanded="false"
                                                aria-controls="collapseThree5"><i class="fa" aria-hidden="true"></i>How
                                                do I Place an Order?</h5>
                                        </div>
                                        <div id="collapseThree5" class="collapse" data-parent="#accordion-faq">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                                life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod.
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