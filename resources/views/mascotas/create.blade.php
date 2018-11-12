@extends('layout')
<head>
    <title>Formulario con Combobox</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet" >
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
</head>
@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Nuevo Mascota
            <a href="{{ route('mascotas.index') }}" class="btn btn-default pull-right">		Regresar
            </a>
        </h2>
        <hr>
        @include('mascotas.fragment.errors')
        {!! Form::open(['route' => 'mascotas.store']) !!}

        @include('mascotas.fragment.form')

        {!! Form::close() !!}
    </div>
    <div class="col-xs-12 col-sm-4">
        @include('mascotas.fragment.aside')
    </div>
@endsection
