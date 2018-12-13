@extends('layout2')

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".1s">
                <li><a href="{{ route('home') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                <li class="active">Mis Servicios</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <!-- collections -->
    <div class="new-collections"   >
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Mis Servicios</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Servicios adquiridos anteriormente.</p>

                <br>

            <div class="container" align="center">
                {!! Form::open(['route' => 'serviciosMascotas.index', 'method'=>'GET',  ])!!}


                    <h4 ><label    class="label-control">Buscar servicios segun mascota: </label></h4>
                <br>
                  {!! Form::select('name',$m,null,['id'=>'nombre_mascota'] ) !!}<br>
                <br><h2 align="center" ><button  type="submit" class="label label-warning"><span >Buscar
                        </span></button></h2>
                <br>
                {!! Form::close() !!}
            </div>


            <div >
                @foreach($mascotasServicios as $mascotaServicio)
                    <div class="col-md-12  ">
                        <div class="new-collections-grid2   " data-wow-delay=".1s" >
                            <div class="new-products-grid-right">
                                <a href="single.html" class="product-image"><img width="500px" height="200px"  src="{{'../../storage/'.$mascotaServicio->url_imagen_servicio_mascota }}" alt=" " class="img-responsive" /></a>

                            </div>
                            <div class="new-products-grid1-right" data-wow-delay=".2s">


                            <h4>Servicio Nro.  {{ $mascotaServicio->id_servicio }}</h4>
                                <hr>
                            <h4>Precios: </h4>
                            <h5>Bs.    {{ $mascotaServicio->precio_servicio_mascota }} </h5>
                                <hr>
                                <h4>Fechas: </h4>
                                <h5>Fecha inicio:     {{ $mascotaServicio->fecha_servicio_inicio }} </h5>
                                <h5>Fecha final:    {{ $mascotaServicio->fecha_servicio_final }} </h5>

                                <hr>

                                    <div class="new-collections-grid1-left simpleCart_shelfItem" align="center">
                                        <p>
                                            <a class="item_add" href="{{ route('serviciosMascotas.show', $mascotaServicio->id ) }}" >Ver mas </a>
                                        </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>

                        </div>

                    </div>
                @endforeach
            </div>
            {!! $mascotasServicios->render() !!}
            <h2 align="center" data-wow-delay=".2s">
                <a href="{{url('/listacliente ') }}"  class="item_add"  >
                    <span class="label label-warning">Adquirir nuevos sevicios
                    </span>
                </a>
            </h2>

        </div>

    </div>
    <div class="clearfix"> </div>
    <!-- //collections -->






@endsection
