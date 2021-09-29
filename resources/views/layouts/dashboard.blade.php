<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elaenia </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/waves/waves.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css')}}">
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        @include('components.header_sidebar')

    	@yield('contenido')

        <div class="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="copy_right">
                            Copyright ©
                            <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script> Quixlab. All Rights Reserved.
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
                                                                    <h5 class="mt-0 mb-1">20.07</h5>
                                                                    
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1">-</h5>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-3">                                                            
                                                                <input type="text" name="" class="form-control" placeholder="60">                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <div class="d-flex">
                                                               
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mt-0 mb-1">-196.18</h5>
                                                                    
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    
                                                                     <input style="text-align: center; width: 80%; margin: 0 40px;" type="text" name="" class="form-control " placeholder="400">
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-3">                                                            
                                                                   <h5 class="mt-0 mb-1"> 576.49</h5>                                                        
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
            <button type="button" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </div>
    </div>

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
                                        
                                        <form action="verify-step-6.html" class="identity-upload p4">
                                    <div class="row">
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Precio Actual </label>
                                            <input type="text" class="form-control" placeholder="25487">
                                        </div>

                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Precio Salida </label>
                                            <input type="text" class="form-control" placeholder="25487">
                                        </div>

                                        <div class="mb-3 col-xl-12">
                                           <label class="me-sm-2">Estado</label>
                                                    <div class="input-group mb-3">
                                                        
                                                        <select name='currency' class="form-control">
                                                            <option value="">Selecciona</option>
                                                            <option value="bitcoin">Abierto</option>
                                                            <option value="litecoin">Cerrado</option>
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



    <script src="{{ asset('theme/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/waves/waves.min.js')}}"></script>

    <script src="{{ asset('theme/vendor/toastr/toastr.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/toastr/toastr-init.js')}}"></script>

    <script src="{{ asset('theme/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/circle-progress/circle-progress-init.js')}}"></script>


    <!--  flot-chart js -->
    {{-- <script src="{{ asset('theme/vendor/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/apexchart/apexchart-init.js')}}"></script> --}}

  {{--   <script src="{{ asset('theme/js/dashboard.js')}}"></script> --}}


    <script src="{{ asset('theme/js/scripts.js')}}"></script>
    <script src="{{ asset('theme/js/settings.js')}}"></script>
    <script src="{{ asset('theme/js/quixnav-init.js')}}"></script>
    <script src="{{ asset('theme/js/styleSwitcher.js')}}"></script>
</body>

</html>