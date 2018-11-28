@extends('layout2')
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
            Servicios Disponibles
            <a href="{{ route('talonarios.index') }}" class="btn btn-default pull-right">		Regresar
            </a>
        </h2>
        <hr>
        <h4>Servicio 1</h4>
        <h6><b>Cuidador:</b> Gabriel Gutierrez </h6>
        <h6><b>Macrodistrito:</b> Los pinos</h6>
        <h6><b>Descripcion:</b> Ofrezco servicio personalizado adaptado a las necesidades<h6> de cada perro en un ambiente adaptado para ellos </h6>
            <h6><b>paseo por hora: Bs.15</b></h6>
            <h6><b>alojamiento: Bs.35</b></h6>
            <button type="submit" class="btn btn-success">Solicitar</button>
            <hr>
            <h4>Servicio 2</h4>
            <h6><b>Cuidador:</b> Sergio Medrano </h6>
            <h6><b>Macrodistrito:</b> Obrajes</h6>
            <h6><b>Descripcion:</b> Matrimonio amante de los perros, ofrecemos nuestra casa para cuidarlos,<h6> donde tenemos espacio para cuidarlos y para que jueguen </h6>
                <h6><b>paseo por hora: Bs.20</b></h6>
                <h6><b>alojamiento: Bs.50</b></h6>
                <button type="submit" class="btn btn-success">Solicitar</button>

                <hr>

                <h4>Servicio 3</h4>
                <h6><b>Cuidador:</b> Mateo Navia </h6>
                <h6><b>Macrodistrito:</b> Bolognia</h6>
                <h6><b>Descripcion:</b> Ofrezco mi casa para cuidarlos, con mucho espacio para ellos<h6> y paseos largos en distintos parques </h6>
                    <h6><b>paseo por hora: Bs.10</b></h6>
                    <h6><b>alojamiento: Bs.40</b></h6>
                    <button type="submit" class="btn btn-success">Solicitar</button>

@endsection