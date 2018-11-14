<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>DogFy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
        <link href='//fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/responsiveslides.css">
        <script src="js/jquery.min.js"> </script>
        <script src="js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {

                // Slideshow 1
                $("#slider1").responsiveSlides({
                    maxwidth: 1600,
                    speed: 600
                });
            });
        </script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>
    <body>
    <!---start-wrap--->
    <div class="wrap">
        <!---start-header--->
        <div class="header">
            <!---start-top-header--->
            <div class="top-header">
                <div class="top-header-left">
                 </div>

                <div class="clear"> </div>
            </div>
            <div class="clear"> </div>
            <div class="sub-header">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" title="logo" /></a>
                </div>
                <div class="sub-header-right">
                 </div>
                <div class="clear"> </div>
            </div>
            <div class="clear"> </div>
            <div class="top-nav">
             </div>
            <!---end-top-header--->
            <!---End-header--->
        </div>

        <!--start-image-slider---->
        <div class="image-slider">
            <!-- Slideshow 1 -->
            <ul class="rslides" id="slider1">
                <li><img src="images/slider1.jpg" alt=""></li>
                <li><img src="images/slider3.jpg" alt=""></li>
                <li><img src="images/slider1.jpg" alt=""></li>
            </ul>
            <!-- Slideshow 2 -->
        </div>
        <!--End-image-slider---->
        <div class="content">
            <div class="products-box">
                <div class="products">
                    <h5><span>Bienvenido</span> </h5>
                    <div class="section group" align="center">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                                <div class="grid_1_of_2 images_1_of_5">
                                <h3> Ingresar a la pagina </h3>
                                <div class="button"><span><a href="{{ url('/home') }}">Inicio</a></span></div>
                                </div>
                            @else
                        <div class="grid_1_of_2 images_1_of_5">
                             <h3> Ingresar a la pagina </h3>
                             <div class="button"><span><a href="{{ route('login') }}">Login</a></span></div>
                        </div>
                                @if (Route::has('register'))
                        <div class="grid_1_of_2 images_1_of_5">
                             <h3>Si no tiene usuario click aqui para registrarse </h3>
                             <div class="button"><span><a href="{{ route('register') }}">Registrar</a></span></div>
                        </div>
                                 @endif
                            @endauth
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <div class="clear"> </div>
        <div class="footer">
            <div class="section group">
              </div>
        </div>
    </div>
    <!---End-wrap--->

            <div class="content">

                <div class="links">
                    <a href="{{route('empresas.index')}}">Ver empresa datos</a>
                    <a href="{{route('talonarios.index')}}">Ver talonarios</a>
                    <a href="{{route('mascotas.index')}}">Mascotas</a>
                    <a href="{{route('servicios.index')}}">Servicios</a>
                    <a href="{{route('servicios.index')}}">Servicios</a>
                </div>


            </div>

        </div>
    </body>
</html>
