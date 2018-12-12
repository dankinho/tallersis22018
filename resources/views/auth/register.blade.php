@extends('layouts.app')

@section('content')

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a  href="{{ route('home') }}"  ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                <li class="active">Registro</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- register -->
    <div class="register">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Registro</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Ingrese sus datos aqui.</p>
            <br>
            <div class="col-md-12" >


                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">

                                <div   data-wow-delay=".5s">
                                <div class="card-body">
                                     <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contrasena') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contrasena') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>

                                        </div>
                                         <div class="form-group row">
                                             <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Tipo de usuario</label>

                                             <div class="col-md-6">
                                                 {!! Form::select('tipo_usuario', array('dueno' => 'Dueño', 'cuidador' => 'Cuidador'), 'dueno'); !!}
                                             </div>

                                         </div>
                                         <br>


                                         <div  align="center"  >
                                             <button type="submit" class="btn btn-primary">
                                                 {{ __('Siguiente') }}
                                             </button>

                                         </div>

                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>

        </div>
    </div>
    <!-- //register -->


@endsection
