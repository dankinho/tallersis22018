@extends('layout')

@section('content')
    <h2>
        Datos del talonario
    </h2>
    <div class="col-xs-12 col-sm-8">
        <h2>
            <strong>Dosificacion </strong> {{ $talonario->dosificacion }}
            <a href="{{ route('talonarios.index') }}" class="btn btn-default pull-right">		Regresar
            </a>
        </h2>
        <hr>
        <p>NUMERO DE AUTORIZACION: {{ $talonario->n_autorizacion }}</p>
        <p>LEYENDA:                {{ $talonario->leyenda }}</p>
        <p>FECHA LIMITE DE EMISION:{{ $talonario->fecha_limite_emision}}</p>


        <a href="{{ route('talonarios.edit', $talonario->id ) }}" class="btn btn-primary">
            Editar
        </a>
    </div>
    <div class="col-xs-12 col-sm-4">
        @include('talonarios.fragment.aside')
    </div>
@endsection

