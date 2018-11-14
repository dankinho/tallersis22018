<!DOCTYPE html>
<html lang="es">
<head>
    <title>App | Dogfy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DogFy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link href="../../css/style.css" rel="stylesheet" type="text/css"  media="all" />
    <link href='//fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/responsiveslides.css">
    <script src="../../js/jquery.min.js"> </script>
    <script src="../../js/responsiveslides.min.js"></script>
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

</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
                        <a href="index.html"><img src="../../images/logo.png" title="logo" /></a>
                    </div>
                    <div class="sub-header-right" align="center">
                        <ul>
                            <li><h3><a href="#">Cerrar sesion</a></h3></li>
                            <li><a href="#">Perfil</a></li>
                         </ul>

                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="clear"> </div>

                <!---end-top-header--->
                <!---End-header--->
            </div>
            <div class="content">

            @yield('content')
            </div>
            <div class="clear"> </div>
            <div class="footer" align="center">
                <div class="col_1_of_1 span_1_of_1 footer-lastgrid">
                    <h3>Nuestras redes sociales</h3>
                    <ul>
                        <li><a href="#"><img src="../../images/facebook.png" title="facebook" /></a></li>
                        <li><a href="#"><img src="../../images/twitter.png" title="Twiiter" /></a></li>
                        <li><a href="#"><img src="../../images/rss.png" title="Rss" /></a></li>
                        <li><a href="#"><img src="../../images/gpluse.png" title="Google+" /></a></li>
                    </ul>
                    <p>&copy 2018  . All Rights Reserved | Design by <a href="http://google.com/">W3layouts</a></p>
                </div>
             </div>
        </div>
        <!---End-wrap--->
</body>
</body>
</html>

