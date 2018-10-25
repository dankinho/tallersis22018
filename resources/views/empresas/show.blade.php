@extends('layout')

@section('content')
    <h2>
        Datos de la empresa
    </h2>
    <div class="col-xs-12 col-sm-8">
        <h2>
            <strong>{{ $empresas->nombre }}</strong>
            <a href="{{ route('empresas.index') }}" class="btn btn-default pull-right">		Regresar
            </a>
        </h2>
        <hr>
        <p>NIT:       {{ $empresas->nit }}</p>
        <p>TELEFONO:  {{ $empresas->telefono }}</p>
        <p>CELULAR:   {{ $empresas->celular}}</p>
        <p>TIPO AGENCIA:       {{ $empresas->tipo_agencia }}</p>
        <p>DIRECCION:  {{ $empresas->direccion }}</p>
        <p>CIUDAD:   {{ $empresas->ciudad}}</p>

        <a   class="btn btn-primary">
            Editar
        </a>
    </div>
@endsection
