@extends('layout2')

@section('content')
    <h2>
        Datos del servicio
    </h2>
    <div class="col-xs-12 col-sm-8">
        <h2>
            <strong>Mascota </strong> {{ $servicioMascota->id_mascota }}
            <a href="{{ route('serviciosMascotas.index') }}" class="btn btn-default pull-right">		Regresar
            </a>
        </h2>
        <hr>
        <p>Servicio: {{ $servicioMascota->id_servicio }}</p>
        <p>Tipo de Servicio:                {{ $servicioMascota->cat_id_tipo_servicio }}</p>
        <p>Fecha inicio del servicio:{{ $servicioMascota->fecha_servicio_inicio       }}</p>
        <p>Fecha de finalizacion del servicio:{{ $servicioMascota->fecha_servicio_final}}</p>
        <p>Precio Bs. :{{ $servicioMascota->precio_servicio_mascota}}</p>
        <p>Estado del servicio :{{ $servicioMascota->id_estado_servicio }}</p>
        <a href="{{ route('serviciosMascotas.edit', $servicioMascota->id ) }}" class="btn btn-primary">
            Cancelar
        </a>
        <a href="{{ route('serviciosMascotas.edit', $servicioMascota->id ) }}" class="btn btn-primary">
            Ver Chat
        </a>
        <a href="{{ route('serviciosMascotas.edit', $servicioMascota->id ) }}" class="btn btn-primary">
            Ver servicio
        </a>
    </div>
@endsection

