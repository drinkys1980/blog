@extends("admin.template.main")

@section("title", "Lista de Artículos")

@section("content")
    <a href="{{ route('articles.create') }}" class="btn btn-info">Registrar Nuevo Artículo</a><hr />
    <!-- BUSCADOR -->
    {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar Artículo', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id="search">
                <span class="glyphicon glyphicon-search" aria-hidden="true">
                </span>                
            </span>
        </div>
    {!! Form::close() !!}
    <!-- FIN BUSCADOR -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Usuario</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>{{ $article->user->name }}</td>
                    <td><a href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('¿Estás seguro de eliminarla?')" class="btn btn-danger">DL</a><a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">ED</a><a href="{{ route('articles.show', $article->id) }}" class="btn btn-success">VW</a><a href="/admin/articles/{{ $article->id }}/confirmSendEmail" class="btn btn-info">EM</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $articles->render() !!}
    </div>
@endsection
