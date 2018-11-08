@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="card-header">
                            <a href="{{route('empresas.index')}}">Ver empresa datos</a>

                        </div>
                        <div class="card-header">
                            <a href="{{route('talonarios.index')}}">Ver talonarios</a>
                        </div>
                        <div class="card-header">
                            <a href="{{route('mascotas.index')}}">Ver Mascotas</a>
                        </div>
                        <div class="card-header">
                            <a href="{{route('servicios.index')}}">Ver Servicios</a>
                        </div>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
