@extends('layouts.app')

@section('content')



    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                <li class="active">Ingresar</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- login -->
    <div class="login">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Ingresar Cuenta</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Ingrese su correo y contrasena</p>


            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form method="POST" action="{{ route('login') }}" >
                    @csrf
                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Correo_Electronico') }}</label>

                    <input id="email" type="email"  placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>

                    @endif

                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contrasena') }}</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"   placeholder="Password" name="password" required>

                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Recordar contrasena') }}
                    </label>


                    <input type="submit" value="{{ __('Login') }}">



                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvide mi contrasena') }}
                    </a>
                </form>
            </div>
            <h4 class="animated wow slideInUp" data-wow-delay=".5s">No tengo cuenta</h4>
            <p class="animated wow slideInUp" data-wow-delay=".5s"><a href="register.html">Registrate aqui </a> (o) Vuelve  a <a href="index.html">Inicio<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
        </div>
    </div>
    <!-- //login -->

@endsection
