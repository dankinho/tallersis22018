<div class="form-group">
    {!! Form::label('nombre_cliente', 'Nombre') !!}
    {!! Form::text('nombre_cliente', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('apellido_cliente', 'Apellido') !!}
    {!! Form::text('apellido_cliente', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('cat_id_tipo_identidad', 'Tipo de Identificacion') !!}
    <br>
    {!! Form::select('cat_id_tipo_identidad', array('1' => 'Carnet', '2' => 'Pasaporte'), '1'); !!}
</div>
<div class="form-group">
    {!! Form::label('num_doc_identidad', 'Numero de identificacion') !!}
    {!! Form::text('num_doc_identidad', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('genero_cliente', 'Genero') !!}
    <br>
    {!! Form::select('genero_cliente', array('Femenino' => 'Femenino', 'Masculino' => 'Masculino'), 'Masculino'); !!}
</div>
<div class="form-group">
    {!! Form::label('direccion_casa', 'Direccion del domicilio') !!}
    {!! Form::text('direccion_casa', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('direccion_numero_casa', 'Numero de casa') !!}
    {!! Form::text('direccion_numero_casa', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('cat_macrodistrito', 'Macrodistrito') !!}
    <br>
    {!! Form::select('cat_macrodistrito', array('3' => 'Zona Sur', '4' => 'Centro'), '3'); !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>

