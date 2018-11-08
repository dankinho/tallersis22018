@extends('layout')

@section('content')
    <h2>
        Datos del mascotas
    </h2>
    <div class="col-xs-12 col-sm-8">
        <h2>
            <strong>Nombre   </strong> {{ $mascota->nombre_mascota }}
            <a href="{{ route('mascotas.index') }}" class="btn btn-default pull-right">		Regresar
            </a>
        </h2>
        <hr>
        <p>FECHA DE NACIMIENTO: {{ $mascota->fecha_nacimiento }}</p>
        <p>GENERO:                {{ $mascota->genero }}</p>
        <p>OBSERVACIONES:{{ $mascota->observaciones}}</p>


        <a href="{{ route('mascotas.edit', $mascota->id ) }}" class="btn btn-primary">
            Editar
        </a>
    </div>
    <div class="col-xs-12 col-sm-4">
        @include('mascotas.fragment.aside')
    </div>
@endsection

