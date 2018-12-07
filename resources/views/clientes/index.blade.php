@extends('layout2')
<head>
    <title>Nuevo Dueno</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet" >
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
</head>
@section('content')
      <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".1s">
                <li><a href="{{ route('home') }}" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Registro</a></li>
                <li  href="{{ route('mascotas.index') }}"class="active"> dueno de mascota  </li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->

    <!-- collections -->
    <div class="new-collections"   >
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Nuevo Dueno</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">.</p>
            <div >

                <div class="col-md-12  ">

                    <div class="new-collections-grid2   " data-wow-delay=".1s" >


                        <hr>
                        @include('clientes.fragment.errors')
                        {!! Form::open(['route' => 'clientes.store']) !!}

                        @include('clientes.fragment.form')

                        {!! Form::close() !!}




                    </div>

                </div>


            </div>

        </div>
        <div class="clearfix"> </div>
        <!-- //collections -->

@endsection
