<div class="form-group">
    {!! Form::label('nombre_mascota', 'nombre_mascota') !!}
    {!! Form::text('nombre_mascota', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('fecha_nacimiento', 'fecha_nacimiento') !!}
    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('genero', 'genero') !!}
    {!! Form::text('genero', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('observaciones', 'observaciones') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>
</div>
<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>

