@extends("admin.template.main")
@section("title", "Editar Categor?a " . $category->name)

@section("content")
    {!! Form::open(['route' => ['categories.update', $category], 'method' => 'PUT', 'accept-charset' => 'ISO-8859-1']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre Categor?a', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
