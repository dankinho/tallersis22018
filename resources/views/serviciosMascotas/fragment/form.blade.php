<div class="form-group">
    {!! Form::label('id_mascota', 'Seleccionar mascota') !!}
    {!! Form::text('id_mascota', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('fecha_servicio_inicio', 'Seleccionar fecha inicio') !!}
    {!! Form::text('fecha_servicio_inicio', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('fecha_servicio_final', 'Seleccionar fecha final') !!}
    {!! Form::textarea('fecha_servicio_final', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('fecha_limite_emision', 'Fecha Limite Emision') !!}
    {!! Form::date('fecha_limite_emision', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>

