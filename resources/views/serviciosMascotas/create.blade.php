@extends('layout2')

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".1s">
                <li><a href="{{ route('home') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio/Servicios</a></li>
                <li  href="{{ route('serviciosMascotas.index') }}"class="active"> servicios  </li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- collections -->
    <div class="new-collections"   >
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Nuevo Comentario</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">.</p>
            <div class="col-xs-12 col-sm-8">
                <h2>
                    Adquirir servicio
                    <a href="{{ route('serviciosMascotas.index') }}" class="btn btn-default pull-right">		Regresar
                    </a>
                </h2>
                <hr>

                <div class="col-md-12  ">
                    <div class="new-collections-grid2   " data-wow-delay=".1s" >

                        <div class="new-products-grid1-right" data-wow-delay=".2s">


                            <h4>Titulo del servicio: </h4>
                            <h5> ...........</h5>
                            <hr>
                            <h4> Tipo de servicio : </h4>
                            <h5> ...........  </h5>
                            <hr>
                            <h4>Precio: </h4>
                            <h5>  .......... </h5>
                            <div class="clearfix"> </div>
                        </div>

                    </div>

                </div>
 
                {!! Form::open(['route' => 'serviciosMascotas.store']) !!}

                <div class="form-group">
                    {!! Form::label('id_mascota', 'Seleccionar mascota') !!}
                    {!! Form::text('id_mascota', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fecha_servicio_inicio', 'Seleccionar fecha inicio') !!}
                    {!! Form::text('fecha_servicio_inicio', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fecha_servicio_final', 'Seleccionar fecha final') !!}
                    {!! Form::textarea('fecha_servicio_final', null, ['class' => 'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
                </div>



                {!! Form::close() !!}
            </div>
        </div>
@endsection
