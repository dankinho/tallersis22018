@extends('layout2')

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".1s">
                <li><a href="{{ route('home') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio/</a></li>
                <li class="active"> Tu Cuenta </li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <!-- collections -->
    <div class="new-collections"   >
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Datos personales</h3>
            <div class="col-md-12  ">
                <div class="new-collections-grid2   " data-wow-delay=".1s" >

                    <div class="new-products-grid1-right" data-wow-delay=".2s">


                        <h4>Nombre: </h4>
                        <h5>{{ $usuarios->nombre_cliente }} {{ $usuarios->apellido_cliente }}</h5>
                        <hr>
                        <h4>Numero de identidad: </h4>
                        <h5>  {{ $usuarios->num_doc_identidad }} </h5>
                        <hr>
                        <h4>Genero: </h4>
                        <h5> {{ $usuarios->genero_cliente }} </h5>
                        <hr>
                        <h4>Direccion de domicilio: </h4>
                        <h5> {{ $usuarios->direccion_casa }} # {{ $usuarios->direccion_numero_casa }}</h5>
                        <hr>
                        <h4>Macrodistrito: </h4>
                        <h5>  {{$items}} </h5>
                        <div class="clearfix"> </div>
                    </div>

                </div>

            </div>

            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Mis Mascotas</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">.</p>
            <div >
                @foreach($mascotas as $mascota)
                    <div class="col-md-12  ">
                        <div class="new-collections-grid2   " data-wow-delay=".1s" >
                            <div class="new-products-grid-right">
                                <a href="single.html" class="product-image"><img width="200px" height="50px"  align="right" src={{ $usuarios->url_imagen_mascota }} alt=" " class="img-responsive" /></a>

                            </div>
                            <div class="new-products-grid1-right" data-wow-delay=".2s">


                                <h4>Nombre: {{ $mascota->nombre_mascota }}</h4>
                                <hr>
                                <h4>Genero: </h4>
                                <h5>  {{ $mascota->genero }} </h5>
                                <hr>
                                <h4>Observaciones </h4>
                                <h5> {{ $mascota->observaciones }} </h5>

                                <hr>

                                <div class="new-collections-grid1-left simpleCart_shelfItem" align="center">
                                    <p>
                                        <a class="item_add" href="{{ route('mascotas.show', $mascota->id ) }}" >Ver mas </a>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
            {!!  $mascotas->render() !!}
            <h2 align="center" data-wow-delay=".2s">
                <a href="{{ route('mascotas.create') }}"  class="item_add"  >
                    <span class="label label-warning">Nueva mascota
                    </span>
                </a>
            </h2>

        </div>

    </div>
    <div class="clearfix"> </div>
    <!-- //collections -->

@endsection
