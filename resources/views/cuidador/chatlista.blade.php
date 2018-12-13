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
                    <div class="table-container">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th width="250px">Conversacion con:</th>
                                <th width="250px">Ultimo Mensaje</th>
                                <th width="250px">Fecha</th>
                                <th width="250px"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            ?>

                            @foreach($mess as $messa)
                                <tr>
                                    <td>{{ $messa->id }}</td>
                                    <td>
                                        <strong>
                                            {{ $userf[$i] }}
                                        </strong>
                                    </td>
                                    <td>
                                        <strong>
                                            @if($mi[$i]=="0")
                                                {{ 0 }}
                                            @else
                                                {{ $mi[$i]->body }}
                                            @endif
                                        </strong>
                                    </td>

                                    <td>@if($mi[$i]=="0")
                                            {{ 0 }}
                                        @else
                                            {{ $mi[$i]->created_at }}
                                        @endif</td>
                                    <td>
                                        <form method="POST" action="{{ url('/chatcr2') }}">
                                    {{ csrf_field() }}
                                    <div class="new-collections-grid1-left simpleCart_shelfItem">

                                            <input type="hidden" name="id" value="{{ $messa->id }}">
                                            <p align="center">
                                                <button type="submit" class="item_add">Continuar</button>
                                            </p>
                                        </div>
                                    </form>
                                    </td>

                                </tr>
                                <?php
                                $i=$i+1;
                                ?>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
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