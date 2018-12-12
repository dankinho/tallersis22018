@extends('layout2')
<head>
    <title>Mascota</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet" >
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
</head>
@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".1s">
                <li><a href="{{ route('home') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio/Mis Servicios</a></li>
                <li  href="{{ route('serviciosMascotas.index') }}"class="active"> Mis servicios  </li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- collections -->
    <div class="new-collections"   >
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Cancelar Servicio</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Confirme los datos del servicio y justifique la cancelacion</p>
            <div >

                <div class="col-md-12  ">

                    <div class="new-collections-grid2   " data-wow-delay=".1s" >

                        <div class="col-md-12  ">
                            <div class="new-collections-grid2   " data-wow-delay=".1s" >

                                <div class="new-products-grid1-right" data-wow-delay=".2s">


                                    <h4>Titulo del servicio: </h4>
                                    <h5>{{$titulo}}</h5>
                                    <hr>
                                    <h4>Nombre de la mascota: </h4>
                                    <h5> {{$nombreMascota}}   </h5>
                                    <hr>
                                    <h4> Tipo de servicio : </h4>
                                    <h5> {{$tipoServicio}}  </h5>
                                    <hr>
                                    <h4>Fecha / Hora inicio: </h4>
                                    <h5> {{ $mascotaServ->fecha_servicio_inicio }} </h5>
                                    <hr>
                                    <h4>Fecha / Hora final: </h4>
                                    <h5> {{ $mascotaServ->fecha_servicio_final }} </h5>
                                    <hr>
                                    <h4>Precio: </h4>
                                    <h5>  Bs. {{$mascotaServ->precio_servicio_mascota}}  </h5>
                                    <div class="clearfix"> </div>
                                </div>

                            </div>

                        </div>

                        <hr>
        @include('cancelaciones.fragment.errors')

        {!! Form::model($mascotaServ, ['route' => ['cancelaciones.update', $mascotaServ->id], 'method' => 'PUT']) !!}
                        @include('cancelaciones.fragment.form')

        {!! Form::close() !!}
                    </div>

                </div>


            </div>

        </div>
        <div class="clearfix"> </div>
        <!-- //collections -->






@endsection
