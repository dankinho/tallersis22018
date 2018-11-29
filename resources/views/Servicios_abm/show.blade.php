@extends('layout')

@section('content')
    <h2>
        Datos de Servicios
    </h2>
    <div class="col-xs-12 col-sm-8">
        <h2>
            <strong>ID </strong>
            <a href="{{ route('Servicios_abm.index') }}" class="btn btn-default pull-right">		Regresar
            </a>
        </h2>
        <hr>
        <p>Servicio: </p>
        <p>Cuidador: </p>
        <p>Precio: </p>
        <p>Descripcion:</p>


    </div>
    <div class="col-xs-12 col-sm-4">

    </div>
@endsection
<!-- /.col-lg-6 (nested) -->