
{!! Html::script('js/dropdown.js') !!}
<div class="form-group">
    {!! Form::label('nombre_mascota', 'Nombre de la mascota') !!}
    {!! Form::text('nombre_mascota', null, ['class' => 'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('fecha_nacimiento', 'fecha de Nacimiento') !!}
    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('genero', 'Genero de la mascota (Macho, Hembra)') !!} <br>
    {!! Form::select('genero', array('Macho' => 'Macho', 'Hembra' => 'Hembra') ) !!}
</div>
<div class="form-group">
    {!! Form::label('raza', 'Raza') !!} <br>
    {!! Form::select('cat_raza',$items,null,['id'=>'cat_raza'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('tamano', 'Tamano') !!}  <br>
    {!! Form::select('cat_tamano',$items2,null,['id'=>'cat_tamano']) !!}
</div>
<div class="form-group">
    {!! Form::label('observaciones', 'Observaciones (Alergias, vacunas)') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>

