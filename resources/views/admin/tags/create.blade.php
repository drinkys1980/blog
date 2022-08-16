@extends("admin.template.main")

@section("title", "Crear Etiqueta")

@section("content")
    {!! Form::open(['route' => 'tags.store', 'method' => 'POST', 'accept-charset' => 'ISO-8859-1']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Etiqueta', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
