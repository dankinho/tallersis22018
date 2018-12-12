@extends('layout2')

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".1s">
                <li><a href="{{ route('home') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio/Mis Servicios</a></li>
                <li class="active"> {{$mascota->nombre_mascota }} </li>
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
                            <li >
                                <div class="thumb-image"> <img width="400px" height="400px" src="{{'../../storage/'.$mascota->url_imagen_mascota }}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
                    <h3>{{$mascota->nombre_mascota }}</h3>
                    <h4> Raza : {{ $items }} </h4>

                    <div class="description">
                        <h5><i>Fecha de nacimiento:</i></h5>
                        <p>{{ $mascota->fecha_nacimiento }}</p>
                        <h5><i>Genero:</i></h5>
                        <p>{{ $mascota->genero }}</p>

                        <h5><i>Raza:</i></h5>
                        <p>{{ $items }} </p>
                        <h5><i>Tamano: </i></h5>
                        <p>{{ $items1 }}</p>
                        <h5><i>Observaciones:</i></h5>
                        <p>{{ $mascota->observaciones}}   <p>
                    </div>
                     <div class="social">
                         <!-- //breadcrumbs  <div class="description">
                            <h5><i>Opciones</i></h5>
                             <br>
                            <div class="occasion-cart">
                                <a class="item_add" href="{{ route('mascotas.edit', $mascota->id ) }}">Cancelar </a>
                            </div>
                            <br>
                            <div class="occasion-cart">
                                <a class="item_add" href="{{ route('mascotas.edit', $mascota->id ) }}">Editar informacion </a>
                            </div>
                        </div>
-->
                             <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

