@extends("admin.template.main")

@section("title", "Crear Usuario")

@section("content")
    {!! Form::open(['route' => 'users.store', 'method' => 'POST', 'accept-charset' => 'ISO-8859-1']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electronico', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contrasena') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**************', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'placeholder' => 'Por favor seleccionar...', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
