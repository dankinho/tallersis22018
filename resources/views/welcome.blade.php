<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>DogFy</title>

        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script src="js/jquery.min.js"></script>
        <!-- //js -->
        <!-- cart -->
        <script src="js/simpleCart.min.js"></script>
        <!-- cart -->
        <!-- for bootstrap working -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
        <!-- //for bootstrap working -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- timer -->
        <link rel="stylesheet" href="css/jquery.countdown.css" />
        <!-- //timer -->
        <!-- animation-effect -->
        <link href="css/animate.min.css" rel="stylesheet">
        <script src="js/wow.min.js"></script>
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
                <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".2s">
                    <h1><a href="index.html">DOGFY <span>Tu mejor eleccion</span></a></h1>
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

                        </div>
                    </nav>
                </div>
                <div class="logo-nav-right">

                    <!-- search-scripts -->
                    <script src="js/classie.js"></script>
                    <script src="js/uisearch.js"></script>

                    <!-- //search-scripts -->
                </div>
            </div>
        </div>
    </div>
    <!-- //header -->
    <!-- collections-bottom -->
    <div class="collections-bottom">
        <div class="container">
            <div class="collections-bottom-grids">
                <div class="collections-bottom-grid animated wow slideInLeft" data-wow-delay=".2s">
                    <h3>Conectamos <span>Cuidadores con mascotas</span></h3>
                </div>
            </div>

            <div class="newsletter animated wow slideInUp" data-wow-delay=".2s" >
                <h1 class="title animated wow zoomIn" data-wow-delay=".5s" >  <a    >BIENVENIDO</a> </h1>
            @if (Route::has('login'))
                @auth
                     <div class="row animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms" align="center">
                        <div class="col-lg-6 in-gp-tl">
                            <div class="input-group">
                                <h3>Dueño de la mascota</h3>
                                <p>Quiero que me cuiden a mi mascota</p>
                                <h3> <a href="{{ url('/home') }}"><span class="label label-primary">Ingresar</span></a> </h3>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 in-gp-tb">
                            <div class="input-group">
                                <h3>Cuidador</h3>
                                <p>Quiero cuidar mascotas</p>
                                <h3> <a href="{{ url('/home') }}"><span class="label label-primary">Ingresar</span></a> </h3>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->


                @else
                    <div class="row animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms" align="center">
                        <div class="col-lg-6 in-gp-tl">
                            <div class="input-group">
                                <h3>Duenio de la mascota</h3>
                                <p>Quiero que me cuiden a mi mascota</p>
                                <h3 align="center" > <a href="{{ route('login') }}"><span class="label label-primary">Login</span></a> </h3>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 in-gp-tb">
                            <div class="input-group">
                                <h3>Cuidador</h3>
                                <p>Quiero cuidar mascotas</p>
                                <h3 align="center"> <a  ><span class="label label-primary">Login</span></a> </h3>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->


                    @if (Route::has('register'))

                        <div class="row animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms" align="center">
                            <div class="col-lg-6 in-gp-tl">
                                <div class="input-group">
                                    <h3> <a href="{{ route('register') }}"><span class="label label-primary">Registrar</span></a> </h3>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6 in-gp-tb">
                                <div class="input-group">
                                    <h3> <a  ><span class="label label-primary">Registrar</span></a> </h3>
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->


                    @endif
                @endauth
            @endif


            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-grids">


                <div class="clearfix"> </div>
            </div>
            <div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
                <h2><a href="index.html">DOGFY <span>shop anywhere</span></a></h2>
            </div>
            <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
                <p>&copy 2016 Best Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    </body>
</html>
