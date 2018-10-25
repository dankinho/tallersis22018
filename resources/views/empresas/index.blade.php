@extends('layout')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Lista de productos
            <a   class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        <hr>


        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th width="20px">ID</th>
                <th>Nombre del producto</th>
                <th colspan="3">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->nombre }}</td>
                    <td>
                        <strong>{{ $empresa->nit }}</strong>
                        {{ $empresa->telefono }}
                    </td>
                    <td width="20px">
                        <a  href="{{ route('empresas.show', $empresa->id ) }}" class="btn btn-link">
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

        {!! $empresas->render() !!}
    </div>
@endsection
