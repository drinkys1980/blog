@extends("admin.template.main")

@section("title", "Lista de Etiquetas")

@section("content")
    <a href="{{ route('tags.create') }}" class="btn btn-info">Registrar Nueva Etiqueta</a>
    <!-- BUSCADOR -->
    {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar Tag', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id="search">
                <span class="glyphicon glyphicon-search" aria-hidden="true">
                </span>                
            </span>
        </div>
    {!! Form::close() !!}
    <!-- FIN BUSCADOR -->
    <hr />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td><a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('¿Estás seguro de eliminarla?')" class="btn btn-danger">DL</a><a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning">ED</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $tags->render() !!}
    </div>
@endsection
