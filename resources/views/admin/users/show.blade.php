@extends("admin.template.main")

@section("title", "Mostrar Usuario ".$user->name)

@section("content")
    <a href="{{ route('users.index') }}" class="btn btn-info">Devolver a página anterior</a><hr />
    {!! Form::open(['route' => ['users.show', $user], 'method' => 'GET', 'accept-charset' => 'ISO-8859-1']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre: '.$user->name) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico: '.$user->email) !!}
        </div>
        <div class="form-group">
            {!! Form::label('type', 'Tipo: '.$user->type) !!}
        </div>
    {!! Form::close() !!}
@endsection
