@extends('layouts.app')
<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 07-11-18
 * Time: 06:52 PM
 */
?>


@section('content')
    <br><center><h1>CRUD SERVICIOS</h1></center></br>
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
            <a   class="btn btn-primary pull-right">Nuevo</a>
            </td>
        </h2></div>
        </tr>
    </table>


        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th width="20px">ID</th>
                 <th>Servicio </th>
                <th>Cuidador </th>
                <th>Precio </th>
                <th>Descripcion </th>
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
                        <a  href="{{ route('talonarios.show', $servicio->id ) }}" class="btn btn-link">
                            Ver
                        </a>
                    </td>
                    <td width="20px">
                        <a href="{{ route('talonarios.edit', $servicio->id ) }}" class="btn btn-link">
                            Editar
                        </a>
                    </td>
                    <td width="20px">

                        <form action="{{ route('talonarios.destroy', $servicio->id ) }}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-link">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

@endsection
