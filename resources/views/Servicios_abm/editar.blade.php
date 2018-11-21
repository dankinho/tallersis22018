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
                <h1 class="page-header">Editar servicio</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="post" action="/ruta ">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label>ID</label>
                                        <label for="validationServer01"></label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" name="id" placeholder="Ingrese nombre de la vacuna" value="{{$editar->id}}" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Servicio</label>
                                        <label for="validationServer01"></label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" name="titulo" placeholder="Ingrese nombre de la vacuna" value="{{$editar->titulo}}" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>descripcion</label>
                                        <label for="validationServer01"></label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" name="descripcion" placeholder="Ingrese nombre de la vacuna" value="{{$editar->descripcion}}" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Precio paseo</label>
                                        <label for="validationServer01">First name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" name="precio_paseo" placeholder="Ingrese nombre de la vacuna" value="{{$editar->precio_paseo}}" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Precio alojamiento</label>
                                        <label for="validationServer01"></label>
                                        <input type="text" class="form-control is-valid" id="validationServer01" name="precio_alojamiento" placeholder="Ingrese nombre de la vacuna" value="{{$editar->precio_alojamiento}}" required>
                                        <div class="valid-feedback">
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-success">Guardar</button>




                            </div> <!-- /.col-lg-6 (nested) -->

                            <div class="col-lg-6">
                                <!-- /.col-lg-6 (nested) -->


                            </div>

                            </form> <!-- /.col-lg-6 (nested) -->
                        </div><!-- /.row (nested) -->
                    </div><!-- /.panel-body -->
                </div> <!-- /.panel -->
            </div> <!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div>
@endsection
