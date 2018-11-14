@extends('layout')

@section('content')
    <div class="content">
        <div class="products-box">
            <div class="products">

                <h5 >
                    <a  href="{{ route('home') }}"    class="btn btn-default pull">Regresar</a>
                    <span>Los servicios de tu mascota</span>
                    <a       class="btn btn-primary pull" >Adquirir nuevos sevicios</a>
                </h5>
                <hr>
                <div class="section group" align="center">
                    <div class="col-xs-12 ">

                        @include('serviciosMascotas.fragment.info')
                        <div class="products products-secondbox">
                            @foreach($mascotasServicios as $mascotaServicio)
                                <div class="cartires-grids">
                                    <div class="grid_1_of_5 images_1_of_5">
                                        <img src="images/g1.jpg">
                                        <h3>{{ $mascotaServicio->fecha_servicio_inicio }} </h3>
                                        <h4> Fecha de creacion </h4>
                                        <p>{{ $mascotaServicio->fecha_servicio_final }}</p>

                                        <div class="button"><span><a   >Ver</a></span></div>
                                        <div class="button"><span><a   >Borrar</a></span></div>
                                    </div>

                                </div>

                            @endforeach


                        </div>


                        {!! $mascotasServicios->render() !!}
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-4">

        </div>
    </div>
@endsection
