<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('theme/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('theme/vendor/waves/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/vendor/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
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

       

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        
        <!--**********************************
            Right sidebar end
        ***********************************-->
        <!--endRemoveIf(production)-->
    </div>


    <script src="{{asset('theme/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('theme/vendor/waves/waves.min.js')}}"></script>

    <script src="{{asset('theme/vendor/validator/jquery.validate.js')}}"></script>
    <script src="{{asset('theme/vendor/validator/validator-init.js')}}"></script>

    <script src="{{asset('theme/js/scripts.js')}}"></script>
    <script src="{{asset('theme/js/settings.js')}}"></script>
    <script src="{{asset('theme/js/quixnav-init.js')}}"></script>
    <script src="{{asset('theme/js/styleSwitcher.js')}}"></script>
</body>

</html>

{{-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
 --}}