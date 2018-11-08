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
                <th colspan="3">&nbsp;</th>
                <th>Nombre </th>
                <th>Descripcion </th>
                <th colspan="3">&nbsp;</th>

            </tr>
            </thead>

</table>

@endsection
