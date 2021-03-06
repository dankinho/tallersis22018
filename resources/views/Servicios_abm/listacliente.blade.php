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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
    <style>
        th {
           height: 10px;
           text-align: center;
            padding: 2px 7px;
        }

    </style>
    <h1>SERVICIOS</h1>

<br><br><br>


    <table width="80%" class="display" id="table_id" border="0" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Precio paseo</th>
                <th>Precio</th>
                <th>Servicio</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id }}</td>
                <td>{{ $servicio->titulo }}</td>
                <td> {{ $servicio->descripcion }}</td>
                <td>{{ $servicio->precio_paseo }} </td>
                <td> {{ $servicio->precio_alojamiento }} </td>
                <td><a href="{{ url('/visualserv', $servicio->id) }}" type="button" class="btn btn-link">Ver</a></td>
            </tr>

        @endforeach
        </tbody>
    </table>
    <!-- /.col-lg-6 (nested) -->

    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable({
                fixedHeader: true
            });

        } );
    </script>
@endsection

