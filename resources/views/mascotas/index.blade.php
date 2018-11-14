@extends('layout2')

@section('content')



    <div class="content">
    <div class="products-box">
        <div class="products">

            <h5 >
                <a  href="{{ route('home') }}"    class="btn btn-default pull">Regresar</a>
                <span>Tus mascotas</span>
                <a  href="{{ route('mascotas.create') }}"    class="btn btn-primary pull" >Nuevo</a>
            </h5>
        <hr>
            <div class="section group" align="center">
                <div class="col-xs-12 ">

                    @include('mascotas.fragment.info')
                    <div class="products products-secondbox">
                        @foreach($mascotas as $mascota)
                            <div class="cartires-grids">
                                <div class="grid_1_of_5 images_1_of_5">
                                    <img src="images/g1.jpg">
                                    <h3>{{ $mascota->nombre_mascota }} </h3>
                                    <h4> Fecha de creacion </h4>
                                    <p>{{ $mascota->created_at }}</p>

                                    <div class="button"><span><a href="{{ route('mascotas.show', $mascota->id ) }}" >Ver</a></span></div>
                                    <div class="button"><span><a href="{{ route('mascotas.destroy', $mascota->id ) }}" >Borrar</a></span></div>
                                </div>

                            </div>

                        @endforeach


                    </div>


                    {!! $mascotas->render() !!}
                </div>
            </div>
        </div>

    </div>

    <div class="col-xs-12 col-sm-4">

    </div>
    </div>
@endsection
