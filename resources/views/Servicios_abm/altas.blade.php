@extends('layout2')
<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 08-11-18
 * Time: 12:53 AM
 */
?>
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registro </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="post" action="/altas">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Servicio</label>
                                        <label for="validationServer01"></label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" name="titulo" placeholder="Ingrese " value="" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>descripcion</label>
                                        <label for="validationServer01"></label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" name="descripcion" placeholder="Ingrese " value="" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Precio paseo</label>
                                        <label for="validationServer01"></label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" name="precio_paseo" placeholder="Ingrese " value="" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Precio alojamiento</label>
                                        <label for="validationServer01"></label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" name="precio_alojamiento" placeholder="Ingrese " value="" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-success">Guardar</button>
                                    <button type="reset" class="btn btn-info">Vaciar </button>




                            </div> <!-- /.col-lg-6 (nested) -->

                            <div class="col-lg-6">



                            </div>

                            </form> <!-- /.col-lg-6 (nested) -->
                        </div><!-- /.row (nested) -->
                    </div><!-- /.panel-body -->
                </div> <!-- /.panel -->
            </div> <!-- /.col-lg-12 -->
        </div><!-- /.row -->

    </div>
@endsection
