@extends('layout2')
<head>
    <title>Mascota</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet" >
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
</head>
@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".1s">
                <li><a href="{{ route('home') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio/Mis Servicios</a></li>
                <li  href="{{ route('mascotas.index') }}"class="active"> Mascotas  </li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <!-- collections -->
    <div class="new-collections"   >
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Nueva mascota</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">.</p>
            <div >

                <div class="col-md-12  ">

                    <div class="new-collections-grid2   " data-wow-delay=".1s" >


                                        <hr>
                                        @include('mascotas.fragment.errors')
                        <form method="POST"
                              action="http://localhost:8000/storage/create" accept-charset="UTF-8"
                              enctype="multipart/form-data">


                        {!! Html::script('js/dropdown.js') !!}
                        <div class="form-group">
                            {!! Form::label('nombre_mascota', 'Nombre de la mascota') !!}
                            {!! Form::text('nombre_mascota', null, ['class' => 'form-control']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('fecha_nacimiento', 'fecha de Nacimiento') !!}
                            {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('genero', 'Genero de la mascota (Macho, Hembra)') !!} <br>
                            {!! Form::select('genero', array('Macho' => 'Macho', 'Hembra' => 'Hembra') ) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('raza', 'Raza') !!} <br>
                            {!! Form::select('cat_raza',$items,null,['id'=>'cat_raza'] ) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tamano', 'Tamano') !!}  <br>
                            {!! Form::select('cat_tamano',$items2,null,['id'=>'cat_tamano']) !!}
                        </div>



                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Agregar archivos</div>
                                        <div class="panel-body">


                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Nuevo Archivo</label>
                                                <div class="col-md-6">
                                                    <input type="file" class="form-control" name="file" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                            {!! Form::label('observaciones', 'Observaciones (Alergias, vacunas)') !!}
                            {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::submit('CARGAR IMAGEN', ['class' => 'btn btn-primary']) !!}
                        </div>


                        </form>



                    </div>

                </div>


            </div>

        </div>
        <div class="clearfix"> </div>
        <!-- //collections -->






@endsection
