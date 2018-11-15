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
                    <a href="{{route('cuidador.create')}}" class="btn btn-default pull ">Agregar cuidador</a>

            </div>

            <div>
                <table style="width:100%">
                <tr><th></th></tr>
                <tr>
                @for($i=0; $i<$num;$i++)
                    <td>
                        Servicio {{ $i+1 }} <br>
                    Nombre: {{ $cuid->find($i+1)->titulo }}<br>
                    Descripcion: {{ $cuid->find($i+1)->descripcion }}<br>
                    Precio Paseo: {{ $cuid->find($i+1)->precio_paseo }}<br>
                    Precio Alojamiento: {{ $cuid->find($i+1)->precio_alojamiento }}<br>
                    </td>
                             @endfor
                </tr>
                </table>
            </div>

            <!-- //FlexSlider-->


            <div class="clear"> </div>
        </div>
    </div>
</div>
@endsection
