@extends('layout')

@section('content')
    <div class="content">
        <div class="products-box">
            <div class="products">

                <h5 >
                    <a  href="{{ route('home') }}"    class="btn btn-default pull">Regresar</a>
                    <span aling="center">Los servicios de tu mascota</span>

                    <a       href="{{route('servicios.index')}}"  class="btn btn-primary pull-right" >Adquirir nuevos sevicios</a>
                </h5>
                <hr>
                <div class="section group" >

                    <div class="Cartires">
                        <div class="car-tires-top-pagnation">
                            <ul>
                                <li><a href="index.html">Inicio /</a></li>
                                <li><span>Tus servicios</span></li>
                            </ul>
                        </div>
                        <div class="cartires-grids">
                            @include('serviciosMascotas.fragment.info')
                            <div class="cartire-grid">
                                @foreach($mascotasServicios as $mascotaServicio)
                                    <div class="cartire-grid-img">
                                        <img src="images/slider1.jpg" title="tries" />
                                    </div>
                                    <div class="cartire-grid-info">
                                        <ul>
                                            <li><span>Servicio Adquirido</span>   </li>
                                            <li> <p> <span>Fecha y Hora Inicial:</span> {{ $mascotaServicio->fecha_servicio_inicio }}</p></li>
                                            <li><p><span>Fecha y Hora Final:</span>{{ $mascotaServicio->fecha_servicio_final }}</p></li>
                                            <li><p><span>Precio:</span>  {{ $mascotaServicio->precio_servicio_mascota }}</p></li>

                                            <li><h3>Datos del servicio en general</h3></li>
                                            <li><p><span>Titulo:</span> {{ $titulo }}</p></li>
                                            <li><p><span>Descripcion:</span> {{ $desc }}</p></li>
                                        </ul>



                                    </div>
                                    <div class="cartire-grid-cartinfo"  >
                                        <h4>Estado del servicio</h4>
                                        <span>{{$estado}}</span>
                                        <br >
                                        <hr>
                                        <a href="{{ route('serviciosMascotas.show', $mascotaServicio->id ) }}">Ver</a><br />
                                        <a href="singlepage.html">Cancelar</a>
                                    </div>
                                    <div class="clear"> </div>
                            </div><br />
                            @endforeach

                        </div>
                    </div>

                        {!! $mascotasServicios->render() !!}
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection
