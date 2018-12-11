@extends('layout2')

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
            <br>

            <h1>Comentarios</h1>

            <br><br>

            @for($i=0; $i<$num2;$i++)
                <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Nombre:</label>

                    <div class="col-md-6">
                        <label class="col-md-4 control-label">{{ $cuid2->find($i+1)->nombre }}</label>

                        @if ($errors->has('days'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Comentario {{ $i+1 }}:</label>

                    <div class="col-md-6">
                        <label class="col-md-4 control-label">{{ $cuid2->find($i+1)->comentario }}</label>

                        @if ($errors->has('days'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                @endfor

            <div>
            <form class="form-horizontal" method="post" action="{{ url('comentario') }}">
                {{csrf_field()}}

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
            <div class="new-collections-grid1-left simpleCart_shelfItem">
                <p align="center">
                    <a href="{{ url('/home') }}" class="item_add" role="button">Regresar</a>
                </p>
            </div>
    </div>
@endsection