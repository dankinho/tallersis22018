@extends('layout2')
<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 07-11-18
 * Time: 06:52 PM
 */
?>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Fecha
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/guardserv') }}">
                            {!! csrf_field() !!}
                            <table width="100%">
                                <tr>
                                    <td width="10%"></td>
                                    <td width="35%">
                                        <div class="form-group">
                                            <label>Fecha inicio :</label>
                                            <input type="date" class="form-control is-valid" id="fecha_inicio" name=" fecha_inicio" required>
                                            <div class="valid-feedback">
                                            </div>
                                        </div>
                                    </td>
                                    <td width="10%"></td>
                                    <td width="35%">
                                        <div class="form-group">
                                            <label>Fecha fin : </label>
                                            <input type="date" class="form-control is-valid" id="fecha_final" name="fecha_final" required>
                                            <div class="valid-feedback">
                                            </div>
                                        </div>
                                    </td>
                                    <td width="10%"></td>
                                </tr>
                            </table>

                            <input type="hidden" name="id" value={{ $id }}>
                            <input type="hidden" name="precio" value={{ $precio }}>

                            <button type="submit" class="btn btn-success" onclick="return dateer();">
                                Comprar
                            </button>

                        </form>

                        <script>
                            function dateer() {
                                var x = document.getElementById("fecha_inicio").value;
                                var y = document.getElementById("fecha_final").value;
                                var hoy = new Date();
                                var dd = hoy.getDate();
                                var mm = hoy.getMonth() + 1;
                                if (mm < 10) mm = "0" + mm;
                                var yyyy = hoy.getFullYear();
                                var hoy2 = yyyy+"-"+mm+"-" + dd;
                                if (x >= y) {
                                    alert("La fecha de inicio debe ser menor");
                                    return false;
                                }
                                if (x < hoy2) {
                                    alert("La fecha de inicio debe ser el dia de hoy o mayor");
                                    return false;
                                }
                            }
                        </script>
                    </div>
                </div>
                </div>
            </div>
        </div>
@endsection