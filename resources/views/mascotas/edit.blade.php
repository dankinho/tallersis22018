@extends('layout')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Editar Mascotas
            <a href="{{ route('mascotas.index') }}" class="btn btn-default pull-right">		Regresar
            </a>
        </h2>
        <hr>
        @include('mascotas.fragment.errors')
        {!! Form::model($mascota, ['route' => ['mascotas.update', $mascota->id], 'method' => 'PUT']) !!}
        @include('mascotas.fragment.form')

        {!! Form::close() !!}
    </div>
    <div class="col-xs-12 col-sm-4">
        @include('mascotas.fragment.aside')
    </div>
@endsection
