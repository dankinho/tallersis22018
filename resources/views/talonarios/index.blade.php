@extends('layout')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Lista de talonarios
            <a  href="{{ route('talonarios.create') }}"  class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        <hr>

        @include('talonarios.fragment.info')
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th width="20px">ID</th>
                <th>Dosificacion</th>
                <th>N Autorizacion</th>
                <th>Leyenda</th>
                <th>Fecha Limite de Emision</th>
                <th colspan="3">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($talonarios as $talonario)
                <tr>
                    <td>{{ $talonario->id}}</td>
                    <td>
                        {{ $talonario->dosificacion }}
                    </td>
                    <td>
                        {{ $talonario->n_autorizacion }}
                    </td>
                    <td>
                        {{ $talonario->leyenda }}
                    </td>
                    <td>
                         {{ $talonario->fecha_limite_emision }}
                    </td>
                    <td width="20px">
                        <a  href="{{ route('talonarios.show', $talonario->id ) }}" class="btn btn-link">
                            Ver
                        </a>
                    </td>
                    <td width="20px">
                        <a href="{{ route('talonarios.edit', $talonario->id ) }}" class="btn btn-link">
                            Editar
                        </a>
                    </td>
                    <td width="20px">

                        <form action="{{ route('talonarios.destroy', $talonario->id ) }}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-link">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $talonarios->render() !!}
    </div>
    <div class="col-xs-12 col-sm-4">
        @include('talonarios.fragment.aside')
    </div>
@endsection
