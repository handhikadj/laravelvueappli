<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!-- Script ini untuk mengatasi FoUC (Flash of Unstyled Content) -->
    <script type="text/javascript">
        var elm=document.getElementsByTagName("html")[0];
        elm.style.display="none";
        document.addEventListener("DOMContentLoaded",function(event) { elm.style.display="block"; });
    </script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    
    <!-- Styles -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    {{-- Styles --}}
    @guest
    <style type="text/css">
        body{
            background: url('/images/gradient.jpg') no-repeat center;
        }
    </style>
    @endguest
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mine.css') }}">
    @auth
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.7.min.css') }}">
        <script src="{{ asset('fontawesome/svg-with-js/js/fontawesome-all.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/mine.css') }}">
     @endauth

</head>

<body>    
    <div id="app">
        @guest 
            @yield('content')
        @else            
            @yield('home-content')             
        @endguest  
    
    </div> {{-- app --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/for-login.js') }}"></script>
    @auth
         {{-- dataTables --}}
         <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('sweetalert2/sweetalert2.7.all.min.js') }}"></script>
        
    @endauth
</body>

</html>
