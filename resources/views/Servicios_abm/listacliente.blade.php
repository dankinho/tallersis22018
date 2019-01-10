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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <style>
        table.display {
            table-layout: fixed;

        }

    </style>
    <h1>SERVICIOS</h1>




    <table id="table_id" class="display" style="width:90%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo </th>
                <th>Descripcion</th>
                <th>Precio paseo</th>
                <th>Precio</th>

            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id}}</td>
                <td>{{ $servicio->titulo  }}</td>
                <td> {{ $servicio->descripcion }}</td>

                <td>{{ $servicio->precio_paseo  }} </td>
                <td> {{ $servicio->precio_alojamiento  }} </td>

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

