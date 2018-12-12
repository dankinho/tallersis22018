@extends('layout2')

@section('content')
@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".1s">
                <li><a href="{{ route('home') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio/Mis Servicios</a></li>
                <li class="active"> {{ $mascotaServ->id }}</li>
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
                    <li  >
                        <div class="thumb-image"> <img src="{{'../../storage/'.$mascotaServ->url_imagen_servicio_mascota }}" data-imagezoom="true" class="img-responsive"> </div>
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
        <h3>{{$titulo}}</h3>
        <h4> Tipo de servicio : {{$tipoServicio}}</h4>
    <!--  <div class="rating1">
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
        </div> -->
        <div class="description">
            <h5><i>Estado del servicio (Pendiente, cancelado, pasado, en proceso)</i></h5>
            <p>{{ $estado   }}</p>
            <h5><i>Descripcion</i></h5>
            <p>{{ $desc   }}</p>

            <h5><i>Fecha Inicio</i></h5>
            <p>{{ $mascotaServ->fecha_servicio_inicio }}</p>
            <h5><i>Fecha Final</i></h5>
            <p>{{$mascotaServ->fecha_servicio_final}}</p>
            <h5><i>Precio</i></h5>
            <p>Bs. {{$mascotaServ->precio_servicio_mascota}} </p>
            <h5><i>Nombre de la mascota</i></h5>
            <p>{{$nombreMascota}}   <p>
        </div>


        @if($estado!='Cancelado')
        <div class="social">
            <div class="description">
                <h5><i>Opciones</i></h5>
                <br><br>
                <div class="occasion-cart">
                    <a class="item_add" href= {{ route('cancelaciones.show', $mascotaServ->id ) }}>Cancelar </a>
                </div>

            </div>

            <div class="clearfix"> </div>
        </div>
        @endif
    </div>

    </div>
            <div class="clearfix"> </div>

            <div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">

                <h3>Comentarios</h3>
                @foreach($comentarios as $cometario)

                <div class="well">
                    <tr>
                        <td>Usuario</td>
                        <td><span class="badge badge-warning"> {{ $cometario->id_usuario }}</span></td>
                    </tr>
                    <tr>
                        <td>Calificacion</td>
                        <td><span class="badge">{{ $cometario->calificacion}} /5</span></td>
                    </tr>
                    <tr>
                        <td>Fecha</td>
                        <td><span class="badge">{{ $cometario->fecha_hora}} </span></td>
                    </tr>
                    <hr>
                    <i>Comentario:</i> <br> {{ $cometario->comentario }}
                </div>
                @endforeach

            </div>
            <h2 align="center" data-wow-delay=".2s">
                <a href="{{url('comentarios', ['mascotaServ' => $mascotaServ->id])}}"  class="item_add"  >
                    <span class="label label-warning">Agregar tu comentario
                    </span>
                </a>
                <a href="{{ route('comentarios.show',['id' => 1]  ) }}" class="btn btn-primary">
                    Editar
                </a>
            </h2>


            <div class="occasion-cart">
                <a class="item_add" href= {{ route('comentarios.create', $mascotaServ->id ) }}>agregar tu comentario </a>
            </div>


            <br>
            <h2 align="center" data-wow-delay=".2s">
                <a href="{{ route('mascotas.create') }}"  class="item_add"  >
                    <span class="label label-warning">Nueva mascota
                    </span>
                </a>
            </h2>
        </div>
    </div>



@endsection

