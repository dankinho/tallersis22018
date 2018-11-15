<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 07-11-18
 * Time: 12:01 PM
 */
@extends('layout')

@section('content')
    <div class="col-xs-12 col-sm-8">
        <h2>
            Reserva de servicios
            <a href="{{ route('talonarios.index') }}" class="btn btn-default pull-right">		Regresar
            </a>
        </h2>
        <hr>
        @include('talonarios.fragment.errors')
        {!! Form::open(['route' => 'talonarios.store']) !!}

        @include('talonarios.fragment.form')

        {!! Form::close() !!}
    </div>
    <div class="col-xs-12 col-sm-4">
        @include('talonarios.fragment.aside')
    </div>
@endsection
