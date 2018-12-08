
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
<div class="panel-body">
    {!! Form::open(array('url' => 'upload', 'method' => 'post', 'files' => true, 'action'=>'../../storage/create')) !!}

    <div class="form-group">
        {!! Form::label('file', 'Foto de la mascota') !!}
        <br>
        <span class="btn btn-default btn-file">Selecciona el archivo {!! Form::file('file') !!}</span>
    </div>

</div>
{{ Form::open(array('url' => 'upload', 'files' => true)) }}

{{ Form::label('photo', 'Foto') }}

<!--así se crea un campo file en laravel-->
{{ Form::file('photo') }}

<div class="form-group">
    {!! Form::label('observaciones', 'Observaciones (Alergias, vacunas)') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>

