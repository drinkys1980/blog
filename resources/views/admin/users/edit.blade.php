@extends("admin.template.main")

@section("title", "Editar Usuario ".$user->name)

@section("content")
    {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT', 'accept-charset' => 'ISO-8859-1']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico') !!}
            {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Correo Electronico', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control', 'placeholder' => 'Por favor seleccionar...', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
