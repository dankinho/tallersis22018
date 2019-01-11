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
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Servicios</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/cuidador') }}">
                            {!! csrf_field() !!}
                            <label class="col-md-4 control-label">Titulo:</label>

                            {{ $id[0] }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <div class="col-md-4 control-label">
                                    {{ $servicios->titulo }}

                                </div>

                            </div>
<center>
                            <a  ><img width="400px" height="500px" src="../../images/1234.jpeg" alt=" " class="img-responsive" /></a>
</center>
                            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">

                                <div class="col-md-6">

                                    @if ($errors->has('days'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Descripcion:</label>

                                <div class="col-md-6 control-label">
                                    {{ $servicios->descripcion }}

                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Superficie de zonas exeriores: </label>
                                <div class="col-md-1 control-label">
                                    {{ $servicios->tamano_campo_exterior }}
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                                @if ( $servicios->existencia_perro_casa  >= 1)

                                <label class="col-md-4 control-label">Perros en casa: </label>
                                    <div class="col-md-1 control-label">
                                        SI
                                    </div>
                                    @else

                                    <label class="col-md-4 control-label">Perros en casa:  </label>
                                    <div class="col-md-1 control-label">
                                        NO
                                    </div>
                                    @endif
                            </div>







                        </form>
                    </div>


                        <div class="panel-heading">Datos del Servicio</div>
                    <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Tarifa de Alojamiento:</label>

                        <div class="col-md-6">
                            {{ $servicios->precio_alojamiento }}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Tarifa de Paseo:</label>

                        <div class="col-md-6">
                            {{ $servicios->precio_paseo }}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Tipo de Servicio:</label>

                        <div class="col-md-6">
                            {{ $servicios->descripcion }}
                        </div>
                    </div>



                        <div class="panel-body">


                </div>
            </div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/fec') }}">
                    {!! csrf_field() !!}

                    <input type="hidden" name="id" value={{ $id[0] }}>
                    <input type="hidden" name="precio" value={{ $servicios->precio_alojamiento }}>

                    <button type="submit" class="btn btn-success" onclick="">
                        Adquirir
                    </button>

                </form>
        </div>
        <center><a href="{{ url('/home') }}" class="btn btn-info" role="button">Regresar</a></center>

    </div>
    </div>
@endsection