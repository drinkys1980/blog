@extends("admin.template.main")

@section("title", "Lista de Usuarios")

@section("content")
    <a href="{{ route('users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a><hr />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Tipo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->type == "admin")
                            <span class="label btn-danger">{{ $user->type }}</span>
                        @else
                            <span class="label btn-primary">{{ $user->type }}</span>
                        @endif
                    </td>
                    <td><a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Estás seguro de eliminarlo?')" class="btn btn-danger">DL</a><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">ED</a><a href="{{ route('users.show', $user->id) }}" class="btn btn-success">VW</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users->render() !!}
@endsection
