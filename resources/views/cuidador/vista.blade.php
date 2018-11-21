@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <img src="images/5.jpg" alt=" " class="img-responsive" />
                <div class="panel panel-default">
                    <div class="panel-body">
                            {!! csrf_field() !!}

                            @for($i=0; $i<$num;$i++)
                                @if($cuid->find($i+1)->tipo_serv==1)

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <div class="col-md-6">

                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Titulo del Servicio:</label>

                                <div class="col-md-6">
                                    <label class="col-md-4 control-label">{{ $cuid->find($i+1)->titulo }}</label>

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
                                    <label class="col-md-4 control-label">{{ $cuid->find($i+1)->descripcion }}</label>
                                    @if ($errors->has('note'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Tarifa de Alojamiento:</label>

                                <div class="col-md-6">
                                    <label class="col-md-4 control-label">{{ $cuid->find($i+1)->precio_alojamiento }}</label>

                                    @if ($errors->has('days'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            @endif
                        @endfor
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>

            <form class="form-horizontal" method="post" action="{{ url('/cuid/com2') }}">

            <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Nombre:</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('days') }}">

                    @if ($errors->has('days'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Agregar comentario:</label>
                <div class="col-md-6">
                    <textarea class="form-control" name="coment" rows="5" id="coment" value="{{ old('note') }}"></textarea>
                    @if ($errors->has('note'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary" onclick="">
                            Comentar
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <center><a href="{{ url('/home') }}" class="btn btn-info" role="button">Regresar</a></center>
    </div>
@endsection