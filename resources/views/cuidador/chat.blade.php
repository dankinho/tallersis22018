@extends('layout2')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Conversation</div>

                    <div class="panel-body">

                        <form method="POST" action="{{ url('/chatcr') }}">
                            {{ csrf_field() }}

                            @foreach($messw as $me)
                                {{ $me->body }}
                                <br>
                            @endforeach
                            <div class="form-group">
                                <label for="description">Message:</label>
                                <textarea class="form-control" id="message" name="message"></textarea>
                            </div>

                            <input type="hidden" name="id" value="{{ $conv->id }}">

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>

                            @if (count($errors))
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>

                    </div>
                    <div><p><a href="{{ route('cuidador.chatlista') }}"><span class="item_add">Regresar</span></a></p></div>
                </div>
            </div>
        </div>
    </div>

@endsection