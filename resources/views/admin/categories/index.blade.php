@extends("admin.template.main")

@section("title", "Lista de Categor�as")

@section("content")
    <a href="{{ route('categories.create') }}" class="btn btn-info">Registrar Nueva Categor�a</a><hr />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acci�n</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('�Est�s seguro de eliminarla?')" class="btn btn-danger">DL</a><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">ED</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $categories->render() !!}
    </div>
@endsection
