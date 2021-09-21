@extends('layouts.dashboard')
@section('contenido')



<div class="page_title">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page_title-content">
                    <p>Welcome Tradiador,
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
                                <h3>$63411.00</h3>
                                <h6>Capital Total</h6>
                            </div>
                            <ul class="list-unstyled">
                                <li class="d-flex">
                                    
                                    <div class="flex-grow-1">
                                        <h5 class="m-0">Inverisión</h6>
                                    </div>
                                    <div class="text-end">
                                 
                                        <span>0.125 USD</span>
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
                    <div class="card-header py-0">
                        <div class="chart_current_data">
                            <h3>254856 <span>USD</span></h3>
                            <p class="text-success">125648 <span>USD (20%)</span></p>
                        </div>
                        {{-- <div class="duration-option">
                            <a id="all" class="active">ALL</a>
                            <a id="one_month" class="">1M</a>
                            <a id="six_months">6M</a>
                            <a id="one_year" class="">1Y</a>
                            <a id="ytd" class="">YTD</a>
                        </div> --}}
                    </div>
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
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-xxl-6">
                                <div class="widget-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="widget-stat">
                                            <div class="coin-title">
                                                <span><i class="cc BTC-alt"></i></span>
                                                <h5 class="d-inline-block ms-2 mb-3">Bitcoin <span>(24h)</span>
                                                </h5>
                                            </div>
                                            <h4>USD 1254.36 <span class="badge badge-success ms-2">+ 06%</span>
                                            </h4>
                                        </div>
                                        <div id="btcChart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-xxl-6">
                                <div class="widget-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="widget-stat">
                                            <div class="coin-title">
                                                <span><i class="cc ETH-alt"></i></span>
                                                <h5 class="d-inline-block ms-2 mb-3">Ethereum <span>(24h)</span>
                                                </h5>
                                            </div>
                                            <h4>USD 1254.36 <span class="badge badge-danger ms-2">- 06%</span>
                                            </h4>
                                        </div>
                                        <div id="ltcChart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-xxl-6">
                                <div class="widget-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="widget-stat">
                                            <div class="coin-title">
                                                <span><i class="cc LTC-alt"></i></span>
                                                <h5 class="d-inline-block ms-2 mb-3">Litecoin <span>(24h)</span>
                                                </h5>
                                            </div>
                                            <h4>USD 1254.36 <span class="badge badge-primary ms-2"> 06%</span>
                                            </h4>
                                        </div>
                                        <div id="xrpChart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-xxl-6">
                                <div class="widget-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="widget-stat">
                                            <div class="coin-title">
                                                <span><i class="cc XRP-alt"></i></span>
                                                <h5 class="d-inline-block ms-2 mb-3">Ripple <span>(24h)</span>
                                                </h5>
                                            </div>
                                            <h4>USD 1254.36 <span class="badge badge-danger ms-2">- 06%</span>
                                            </h4>
                                        </div>
                                        <div id="dashChart"></div>
                                    </div>
                                </div>
                            </div>
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
                        <a href="#">Ver todos </a>
                    </div>
                    <div class="card-body">
                        <div class="transaction-table">
                            <div class="table-responsive">
                                <table class="table mb-0 table-responsive-sm">
                                    <tbody>
                                        <tr>
                                            <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                            </td>

                                            <td>
                                                <span class="badge badge-danger">Sold</span>
                                            </td>
                                            <td>
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td>
                                                Using - Bank *******5264
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Buy</span>
                                            </td>
                                            <td>
                                                <i class="cc LTC"></i> Litecoin
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Sold</span>
                                            </td>
                                            <td>
                                                <i class="cc XRP"></i> Ripple
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Buy</span>
                                            </td>
                                            <td>
                                                <i class="cc DASH"></i> Dash
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Sold</span>
                                            </td>
                                            <td>
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
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
