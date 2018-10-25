@extends('layout')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Lista de talonarios
            <a   class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        <hr>


        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th width="20px">ID</th>
                <th>Nombre del talonario</th>
                <th colspan="3">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($talonarios as $talonario)
                <tr>
                    <td>{{ $talonario->id}}</td>
                    <td>
                        <strong>{{ $talonario->n_autorizacion }}</strong>
                        {{ $talonario->leyenda }}
                    </td>
                    <td width="20px">
                        <a  href="{{ route('talonarios.show', $talonario->id ) }}" class="btn btn-link">
                            Ver
                        </a>
                    </td>
                    <td width="20px">
                        <a >
                            Editar
                        </a>
                    </td>
                    <td width="20px">

                        <button class="btn btn-link">
                            Borrar
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $talonarios->render() !!}
    </div>
@endsection
