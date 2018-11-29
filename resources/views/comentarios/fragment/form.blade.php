
<div class="form-group">
    {!! Form::label('calificacion', 'Calificacion') !!}
    {!! Form::number('calificacion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('comentario', 'Comentario') !!}
    {!! Form::textarea('comentario', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>

