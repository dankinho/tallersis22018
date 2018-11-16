@extends('layout2')

@section('content')


    <div class="content">
        <div class="single-page"><br />
            <div class="single-top-pagination">
                <ul>
                    <li><a href="{{ route('serviciosMascotas.index') }}">Home /MisServicios/</a></li>
                    <li><span>{{ $servicioMascota->id_servicio }}</span></li>
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
                            <li><h1> Servicio de Alojamiento</h1></li>

                        </ul>
                    </div>
                    <hr>
                    <div class="product-description" align="left">
                        <span>ID de servicio: </span>
                        <p >{{ $servicioMascota->id_servicio }}</p>
                        <div class="clear"> </div>
                    </div>
                    <div class="product-description">
                        <span>Mascota:</span>
                        <p> Laika {{ $servicioMascota->id_servicio  }}</p>
                        <div class="clear"> </div>
                    </div>
                    <div class="product-description">
                        <span>Estado del servicio:</span>
                        <p> Pendiente {{ $servicioMascota->id_servicio }} </p>
                        <div class="clear"> </div>
                    </div>
                    <div class="product-description">
                        <span>Fecha de inicio del servicio: </span>
                        <p>{{ $servicioMascota->fecha_servicio_inicio }}</p>
                        <div class="clear"> </div>
                    </div>
                    <div class="product-description">
                        <h3>Fecha fina del servicio:</h3>
                        <p> {{$servicioMascota->fecha_servicio_final}}</p>
                        <a href="{{ route('mascotas.edit', $servicioMascota->id ) }}">Editar</a>
                    </div>

                    <div class="product-description">
                        <h3>Precio</h3>
                        <p> {{$servicioMascota->precio_servicio_mascota}}</p>
                        <a href="{{ route('mascotas.edit', $servicioMascota->id ) }}">Editar</a>
                    </div>
                    <a href="{{ route('serviciosMascotas.edit', $servicioMascota->id ) }}" class="btn btn-primary">
                        Cancelar
                    </a>
                    <a href="{{ route('serviciosMascotas.edit', $servicioMascota->id ) }}" class="btn btn-primary">
                        Ver Chat
                    </a>
                    <a href="{{ route('serviciosMascotas.edit', $servicioMascota->id ) }}" class="btn btn-primary">
                        Ver servicio
                    </a>

                    <br><br><br>
                </div>

                <div class="clear"> </div>
            </div>
        </div>
    </div>


@endsection

