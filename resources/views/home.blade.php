@extends('layout2')

@section('content')

<div class="content">
    <div class="single-page"><br />

        <div class="clear"> </div>
        <div class="product-info">
            <!-- FlexSlider -->


            <div class="card-header">Bienvenido</div>

            <div class="card-body" align="center">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    <hr>

                    <a href="{{route('mascotas.index')}}" class="btn btn-default pull ">Ver mis mascotas</a>
                    <hr>
                    <a href="{{route('serviciosMascotas.index')}}" class="btn btn-default pull ">Ver mis servicios</a>
                    <hr>
                    <a href="{{route('servicios.index')}}" class="btn btn-default pull ">Ver Servicios</a>
                    <hr>
                    <a href="{{route('empresas.index')}}" class="btn btn-default pull " >Ver empresa datos</a>
                    <a href="{{route('talonarios.index')}}" class="btn btn-default pull ">Ver talonarios</a>
                    <hr>
            </div>

            <!-- //FlexSlider-->


            <div class="clear"> </div>
        </div>
    </div>
</div>
@endsection
