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
                    <div class="panel-heading">Fecha de Alojamiento
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ action('abmservicios@confalojamiento',$key) }}">
                            <table width="100%">
                                <tr>
                                    <td width="10%"></td>
                                    <td width="35%">
                                        <div class="form-group">
                                            <label>Fecha inicio :</label>
                                            <input type="date" class="form-control is-valid" name="fechainicio" placeholder="1" value="" required>
                                            <div class="valid-feedback">
                                            </div>
                                        </div>
                                    </td>
                                    <td width="10%"></td>
                                    <td width="35%">
                                        <div class="form-group">
                                            <label>Fecha fin : </label>
                                            <input type="date" class="form-control is-valid" name="fechafin" placeholder="2" value="" required>
                                            <div class="valid-feedback">
                                            </div>
                                        </div>
                                    </td>
                                    <!--
                                    <a href="{//{ url('/visualserv', $servicio->id) }}" type="button" class="btn btn-link"></a>

                                        </a>
  -->

                                    <td width="10%"></td>
                                </tr>
                            </table>
                            <button type="submit" >Adquirir</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
@endsection