<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{setting()->titulo}} </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Storage::url(setting()->favicon) }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/waves/waves.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css')}}">

    <style>
        .avatar{
            background-position: center center;
            background-size: cover;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
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
   

    

    @yield('modal')



    <script src="{{ asset('theme/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/waves/waves.min.js')}}"></script>

    <script src="{{ asset('theme/vendor/toastr/toastr.min.js')}}"></script>
    {{-- <script src="{{ asset('theme/vendor/toastr/toastr-init.js')}}"></script> --}}

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


    @yield('scripts')
</body>

</html>