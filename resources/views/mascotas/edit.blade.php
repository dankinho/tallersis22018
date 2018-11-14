@extends('layout3')

@section('content')
    <div class="content">
        <div class="single-page"><br />
            <div class="single-top-pagination">
                <ul>
                    <li><a href="{{ route('mascotas.index') }}">Home /</a></li>
                    <li><span>{{ $mascota->nombre_mascota }}</span></li>
                </ul>
            </div>
            <div class="clear"> </div>
            <div class="product-info">
                        <!-- FlexSlider -->

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

                        <!-- //FlexSlider-->

                        <div class="clear"></div>



                <div class="clear"> </div>
            </div>
        </div>
    </div>


@endsection
