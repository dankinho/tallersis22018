@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear nueva solicitud de permiso o vacacion</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/cuidador') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Seleccione servicios:</label>

                                <div class="col-md-6">
                                    @php ($h=0)
                                    @for($i=0; $i<$num;$i++)
                                        @if($cuid->find($i+1)->tipo_serv==1)
                                            @php($h=$h+1)
                                        @elseif($cuid->find($i+1)->tipo_serv==2)
                                            @php($h=$h+2)
                                        @endif
                                    @endfor

                                    @if($h==0)
                                        <INPUT TYPE="Radio" Name="serv" ID="aloj" Value="1"><label>Alojamiento</label>
                                        <INPUT TYPE="Radio" Name="serv" ID="pas" Value="2"><label>Paseo</label>
                                        @elseif($h==1)
                                        <INPUT TYPE="Radio" Name="serv" ID="pas" Value="2"><label>Paseo</label>
                                        @elseif($h==2)
                                        <INPUT TYPE="Radio" Name="serv" ID="aloj" Value="1"><label>Alojamiento</label>
                                        @endif

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Titulo del Servicio:</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('days') }}">

                                    @if ($errors->has('days'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Descripcion:</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="desc" rows="5" id="desc" value="{{ old('note') }}"></textarea>
                                    @if ($errors->has('note'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Tipo de Casa:</label>

                                <div class="col-md-6">
                                    <select name="casa" id="casa" onclick="">
                                        <option selected disabled>Elija:</option>
                                    </select>

                                    @if ($errors->has('reason'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('reason') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Zona exteriores:</label>

                                <div class="col-md-6">
                                    <select name="zona" id="zona" onclick="">
                                        <option selected disabled>Elija:</option>
                                    </select>

                                    @if ($errors->has('reason'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('reason') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Superficie de zonas exteriores:</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="sup" id="sup" value="{{ old('days') }}">

                                    @if ($errors->has('days'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <label class="col-md-4 control-label">Coordenadas</label>

                            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Longitud:</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="longitud" id="longitud" value="{{ old('days') }}">

                                    @if ($errors->has('days'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Latitud:</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="latitud" id="latitud" value="{{ old('days') }}">

                                    @if ($errors->has('days'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Altitud:</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="altitud" id="altitud" value="{{ old('days') }}">

                                    @if ($errors->has('days'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">¿Tiene perro en casa?</label>

                                <div class="col-md-6">
                                    <INPUT TYPE="Radio" Name="perro" ID="si" Value="1"><label>Si</label>
                                    <INPUT TYPE="Radio" Name="perro" ID="no" Value="0"><label>No</label>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Tarifa de Alojamiento:</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="alojamiento" id="alojamiento" value="{{ old('days') }}">

                                    @if ($errors->has('days'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Tarifa de Paseo:</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="paseo" id="paseo" value="{{ old('days') }}">

                                    @if ($errors->has('days'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <input type="hidden" name="id_comision" value="1">
                            <input type="hidden" name="id_datos_servicio" value="1">
                            <input type="hidden" name="cat_id_tipo_servicio" value="21">
                            <input type="hidden" name="cat_id_estado_servicio" value="22">
                            <input type="hidden" name="tx_fecha" value="2018-10-05 17:55:08">
                            <input type="hidden" name="tx_id" value="1">
                            <input type="hidden" name="tx_host" value="0.0.0.0">
                            <input type="hidden" name="tipo_casa" value="17">
                            <input type="hidden" name="tipo_campo" value="19">
                            <input type="hidden" name="direc" value="calle sur">
                            <input type="hidden" name="existcamp" value="1">
                            <input type="hidden" name="cantperro" value="3">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" onclick="">
                                        Registrar Solicitud
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="{{ url('/home') }}" class="btn btn-info" role="button">Regresar</a></center>
    </div>
@endsection