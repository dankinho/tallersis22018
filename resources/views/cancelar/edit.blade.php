@extends('layout3')

@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".1s">
                <li><a href="{{ route('home') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio/Mis Servicios</a></li>
                <li href="{{ route('mascotas.index') }}" class="active"> Editar  </li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- collections -->
    <div class="new-collections"   >
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Editar mascota</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">.</p>
            <div >

                    <div class="col-md-12  ">
                        <div class="new-collections-grid2   " data-wow-delay=".1s" >
                            <div class="content">
                                <div class="single-page"><br />

                                    <div class="clear"> </div>
                                    <div class="product-info">
                                        <!-- FlexSlider -->

                                        <hr>
                                    @include('mascotas.fragment.errors')
                                    {!! Form::model($mascota, ['route' => ['mascotas.update', $mascota->id], 'method' => 'PUT']) !!}
                                    @include('mascotas.fragment.form')

                                    {!! Form::close() !!}

                                    <!-- //FlexSlider-->

                                        <div class="clear"></div>



                                        <div class="clear"> </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


        </div>

    </div>
    <div class="clearfix"> </div>
    <!-- //collections -->



@endsection
