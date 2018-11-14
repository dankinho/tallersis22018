@extends('layout2')

@section('content')

    <div class="content">
        <div class="single-page"><br />
            <div class="single-top-pagination">
                <ul>
                    <li><a href="{{ route('mascotas.index') }}">Home /</a></li>
                    <li><span>{{ $mascota->nombre_mascota }}</span></li>
                </ul>
            </div>
            <div class="clear"> </div>
            <div class="product-info">
                <div class="product-image">
                    <div class="flexslider">
                        <!-- FlexSlider -->
                        <script src="../js/imagezoom.js"></script>
                        <script defer src="../js/jquery.flexslider.js"></script>
                        <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />

                        <script>
                            // Can also be used with $(document).ready()
                            $(window).load(function() {
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    controlNav: "thumbnails"
                                });
                            });
                        </script>
                        <!-- //FlexSlider-->

                        <ul class="slides">
                            <li data-thumb="../images/triumph_big1.jpg">
                                <div class="thumb-image"> <img src="../images/triumph_big1.jpg" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                             
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="product-price-info">
                    <hr>
                    <div class="product-catrgory-pagenation">
                        <ul>
                            <li><h1> {{ $mascota->nombre_mascota }}</h1></li>

                        </ul>
                    </div>
                    <hr>
                    <div class="product-description" align="left">
                        <span>Fecha de nacimiento: </span>
                        <p >{{ $mascota->fecha_nacimiento }}</p>
                        <div class="clear"> </div>
                    </div>
                    <div class="product-description">
                        <span>Genero:</span>
                        <p>{{ $mascota->genero }}</p>
                        <div class="clear"> </div>
                    </div>
                    <div class="product-description">
                        <span>Raza:</span>
                        <p>{{ $items }} </p>
                        <div class="clear"> </div>
                    </div>
                    <div class="product-description">
                        <span>Tamano: </span>
                        <p>{{ $items1 }}</p>
                        <div class="clear"> </div>
                    </div>
                    <div class="product-description">
                        <h3>Observaciones:</h3>
                        <p> {{ $mascota->observaciones}}</p>
                        <a href="{{ route('mascotas.edit', $mascota->id ) }}">Editar</a>
                    </div>
                    <br><br><br>
                </div>

                <div class="clear"> </div>
            </div>
        </div>
    </div>

@endsection

