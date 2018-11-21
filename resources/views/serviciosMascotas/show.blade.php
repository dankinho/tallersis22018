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
    @foreach($mascotasServicios as $mascotaServ)
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
        <h3>Titulo del servicio</h3>
        <h4> Tipo de servicio</h4>
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
            <p>{{ $mascotaServ->fecha_servicio_inicio }}</p>

            <h5><i>Fecha Inicio</i></h5>
            <p>{{ $mascotaServ->fecha_servicio_inicio }}</p>
            <h5><i>Fecha Final</i></h5>
            <p>{{$mascotaServ->fecha_servicio_final}}</p>
            <h5><i>Precio</i></h5>
            <p>Bs. {{$mascotaServ->precio_servicio_mascota}} </p>
        </div>


        <div class="occasion-cart">
            <a class="item_add" href= {{ route('serviciosMascotas.edit', $mascotaServ->id ) }}>Cancelar </a>
        </div>
        <div class="social">
            <div class="description">
                <h5><i>Mascota</i></h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                <h5><i>Estado del servicio:</i></h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    </div>
        </div>
    </div>
    @endforeach


@endsection

