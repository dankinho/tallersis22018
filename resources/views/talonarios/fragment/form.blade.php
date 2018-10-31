<div class="form-group">
    {!! Form::label('dosificacion', 'Dosificacion') !!}
    {!! Form::text('dosificacion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('n_autorizacion', 'Numero de Autorizacion') !!}
    {!! Form::text('n_autorizacion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('leyenda', 'Leyenda') !!}
    {!! Form::textarea('leyenda', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('fecha_limite_emision', 'Fecha Limite Emision') !!}
    {!! Form::date('fecha_limite_emision', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>

