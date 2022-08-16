@extends("admin.template.main")
@section("title", "Editar Etiqueta " . $tag->name)

@section("content")
    {!! Form::open(['route' => ['tags.update', $tag], 'method' => 'PUT', 'accept-charset' => 'ISO-8859-1']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $tag->name, ['class' => 'form-control', 'placeholder' => 'Nombre Etiqueta', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
