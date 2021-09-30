@foreach ($accionesrentables as $accion)
    <div class="col-xl-12 col-lg-6 col-xxl-6">
        <div class="widget-card">
            <div class="d-flex justify-content-between align-items-center">
                <div class="widget-stat">
                    <div class="coin-title">
                        <img src="{{$accion->accion->imagen}}" alt="" style="width: 100px;">
                        <h5 class="d-inline-block ms-2 mb-3">{{$accion->accion->nombre_completo}}
                        </h5>
                    </div>
                    <h4>P. Entrada {{$accion->precio}} <span class="badge badge-success ms-2">{{$accion->porcentaje}}%</span>
                    </h4>
                </div>
                <div id="btcChart"></div>
            </div>
        </div>
    </div>
    @endforeach   