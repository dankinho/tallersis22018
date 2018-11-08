@extends('layout')
<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 08-11-18
 * Time: 12:53 AM
 */
?>
@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Nuevo Servicio
            <a href="{{ route('talonarios.index') }}" class="btn btn-default pull-right">		Regresar
            </a>
        </h2>
        <hr>

    </div>
    <h4>
        ID
    </h4>

    <p><input type="text" name="ID" size="70"/></p>
    <h4>
<h4>
    Servicio
</h4>

    <p><input type="text" name="    Servicio" size="70"/></p>
    <h4>
    Cuidador
    </h4>

    <p><input type="text" name="Cuidador" size="70"/></p>
    <h4>
        Precio
    </h4>

    <p><input type="text" name="Precio" size="70"/></p>
    <h4>
        Descripcion
    </h4>
    <textarea name="Descripcion" rows="10" cols="70">Escribe aquí la descripcion de tu servicio</textarea>


@endsection
