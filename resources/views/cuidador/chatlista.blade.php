@extends('layout2')

@section('content')

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
        th {
            text-align: left;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Chats activos</div>
                    ggg
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Iniciar nuevo chat</div>
                    <table style="width:100%">
                        <tr>
                            <th>Usuario</th>
                            <th>Tipo</th>

                        </tr>
                        @for($i=0; $i<$usuc;$i++)
                            @if($usu->find($i+1)->name!=auth()->user()->name)
                            <tr>
                                <form method="POST" action="{{ url('/chat') }}">
                                    {{ csrf_field() }}
                                <td>{{ $usu->find($i+1)->name }}</td>
                                <td>{{ $usu->find($i+1)->tipo_usuario }}</td>
                                <td><div class="new-collections-grid1-left simpleCart_shelfItem">

                                        <input type="hidden" name="id2" value="{{ $usu->find($i+1)->id }}">
                                        <p align="center">
                                            <button type="submit" class="item_add">Iniciar</button>
                                        </p>
                                    </div></td>
                                </form>
                            </tr>
                            @endif
                            @endfor
                    </table>
                    <!-- {{ auth()->user() }} -->
                </div>
            </div>
        </div>
    </div>

    @endsection