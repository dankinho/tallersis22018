

<div class="form-group">
    {!! Form::label('comentario', 'Justifique la causa de la cancelacion') !!}
    {!! Form::textarea('comentario', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>

