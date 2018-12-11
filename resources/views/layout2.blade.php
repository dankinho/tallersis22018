<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="../js/jquery.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="../js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- timer -->
    <link rel="stylesheet" href="../css/jquery.countdown.css" />
    <!-- //timer -->
    <!-- animation-effect -->
    <link href="../css/animate.min.css" rel="stylesheet">
    <script src="../js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->



</head>
<body>

<!-- header -->
<div class="header">
    <div class="container">

        <div class="logo-nav">
            <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                <h1><a href="{{ route('home') }}">DOGFY <span>TU MEJOR OPCION</span></a></h1>
            </div>
            <div class="logo-nav-left1">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ route('home') }}" class="act">Inicio</a></li>
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a href="{{ url('/listacliente ') }}" class="act"  >Servicios  </a>

                            </li>

                            <li><a href="{{route('serviciosMascotas.index')}}">Tus Servicios</a></li>
                            <li><a  href="{{route('mascotas.index')}}">Tu cuenta</a></li>
                        </ul>
                    </div>
                </nav>
            </div>


            <div class="header-right">
                <div class="cart box_1">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto"  >
                        <!-- Authentication Links -->
                        @guest
                            <a class="nav-link" href="{{ route('login') }}"><p>{{ __('Login') }}</p></a>

                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}"><p>{{ __('Register') }}</p></a>
                            @endif

                        @else



                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>





                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <h3 align="right">{{ Auth::user()->name }}</h3>
                                    </a>
                                        <a class="simpleCart_empty" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <p align="right">{{ __('Logout') }}</p>
                                        </a>


                        @endguest
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- //header -->


@yield('content')
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-6 footer-grid animated wow slideInLeft" data-wow-delay=".3s">
                <h3>Sobre Nosotros</h3>
                <p>DogFy es una plataforma que pone en contacto a cuidadores de perros con experiencia y propietarios de perros<span>
                        Permite a que cada propietario encontrar el cuidador adecuado para su mascota,
                        haciendo la reservacion en el sistema sea garantizando.  </span></p>
            </div>
            <div class="col-md-6 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
                <h3>Contactanos</h3>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Calle 2, Obrajes <span>La Paz, Bolivia</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@dogfy.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+591 76868123</li>
                </ul>
            </div>


            <div class="clearfix"> </div>
        </div>
        <div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
            <h2><a href="index.html">DOGFY <span>TU MEJOR OPCION</span></a></h2>
        </div>
        <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
            <p>&copy 2016 Best Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
</body>
</html>
