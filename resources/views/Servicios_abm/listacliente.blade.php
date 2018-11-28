@extends('layout2')
<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 07-11-18
 * Time: 06:52 PM
 */
?>


@section('content')
    <br><center><h1>SERVICIOS</h1></center></br>
    <table width="100%">
        <tr>

            <div class="col-xs-12 col-sm-8">
                <h2>
                    <td>
                        <h3>
                            Lista de servicios
                        </h3>
                    </td>
                    <td>
                        <a  href="{{url('altas/create')}}" class="btn btn-primary pull-right">Nuevo</a>
                    </td>
                </h2></div>
        </tr>
    </table>


    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th width="20px">ID</th>
            <th>Titulo </th>
            <th>Descripcion de servicio </th>
            <th>Precio paseo</th>
            <th>Precio alojamiento </th>
            <th colspan="3">&nbsp;</th>

        </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id}}</td>
                <td>
                    {{ $servicio->titulo  }}
                </td>
                <td>
                    {{ $servicio->descripcion }}

                </td>

                <td>
                    {{ $servicio->precio_paseo  }}
                </td>
                <td>
                    {{ $servicio->precio_alojamiento  }}
                </td>

                <td width="20px">
                <td><a href="{{ url('/visualserv', $servicio->id) }}" type="button" class="btn btn-link">Solicitar</a>
                    </a>
                </td>
                <td width="20px">


            </tr>

        @endforeach
        </tbody>

    </table>
    <!-- /.col-lg-6 (nested) -->
@endsection