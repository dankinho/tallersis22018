@extends('layout')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Lista de mascotas
            <a  href="{{ route('mascotas.create') }}"  class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        <hr>

        @include('mascotas.fragment.info')
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th width="20px">ID</th>
                <th>Nombre </th>
                <th>Fecha de nacimiento</th>
                <th>Genero</th>
                <th>Observaciones</th>
                <th colspan="3">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->id}}</td>
                    <td>
                        {{ $mascota->nombre_mascota }}
                    </td>
                    <td>
                        {{ $mascota->fecha_nacimiento }}
                    </td>
                    <td>
                        {{ $mascota->genero }}
                    </td>
                    <td>
                         {{ $mascota->observaciones }}
                    </td>
                    <td width="20px">
                        <a  href="{{ route('mascotas.show', $mascota->id ) }}" class="btn btn-link">
                            Ver
                        </a>
                    </td>
                    <td width="20px">
                        <a href="{{ route('mascotas.edit', $mascota->id ) }}" class="btn btn-link">
                            Editar
                        </a>
                    </td>
                    <td width="20px">

                        <form action="{{ route('mascotas.destroy', $mascota->id ) }}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-link">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $mascotas->render() !!}
    </div>
    <div class="col-xs-12 col-sm-4">
        @include('mascotas.fragment.aside')
    </div>
@endsection
