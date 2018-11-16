@extends('layout2')

@section('content')
@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".1s">
                <li><a href="{{ route('home') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio/Mis Servicios</a></li>
                <li class="active">{{ $servicioMascota->id_servicio }}</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="single">
        <div class="container">
    <div class="col-md-12 single-right">
        <div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
            <div class="flexslider">
                <ul class="slides">
                    <li data-thumb="../../images/si.jpg">
                        <div class="thumb-image"> <img src="../../images/si.jpg" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                    <li data-thumb="../../images/si1.jpg">
                        <div class="thumb-image"> <img src="../../images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                    <li data-thumb="../../images/si2.jpg">
                        <div class="thumb-image"> <img src="../../images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                </ul>
            </div>
            <!-- flixslider -->
            <script defer src="../../js/jquery.flexslider.js"></script>
            <link rel="stylesheet" href="../../css/flexslider.css" type="text/css" media="screen" />
            <script>
                // Can also be used with $(document).ready()
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                    });
                });
            </script>
            <!-- flixslider -->
        </div>
    <div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
        <h3>Men's Solid Casual Shirt</h3>
        <h4><span class="item_price">$550</span> - $900</h4>
        <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
        </div>
        <div class="description">
            <h5><i>Description</i></h5>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
        </div>
        <div class="color-quality">
            <div class="color-quality-left">
                <h5>Color : </h5>
                <ul>
                    <li><a href="#"><span></span>Red</a></li>
                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                </ul>
            </div>
            <div class="color-quality-right">
                <h5>Quality :</h5>
                <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                    <option value="null">5 Qty</option>
                    <option value="null">6 Qty</option>
                    <option value="null">7 Qty</option>
                    <option value="null">10 Qty</option>
                </select>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="occasional">
            <h5>Occasion :</h5>
            <div class="colr ert">
                <label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Wear</label>
            </div>
            <div class="colr">
                <label class="radio"><input type="radio" name="radio"><i></i>Party Wear</label>
            </div>
            <div class="colr">
                <label class="radio"><input type="radio" name="radio"><i></i>Formal Wear</label>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="occasion-cart">
            <a class="item_add" href="#">add to cart </a>
        </div>
        <div class="social">
            <div class="social-left">
                <p>Share On :</p>
            </div>
            <div class="social-right">
                <ul class="social-icons">
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="twitter"></a></li>
                    <li><a href="#" class="g"></a></li>
                    <li><a href="#" class="instagram"></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    </div>
        </div>
    </div>

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

