@extends("admin.template.main")

@section("title", "Mostrar Articulo " . $article->title)

@section("content")
    <a href="{{ route('articles.index') }}" class="btn btn-info">Devolver a página anterior</a><hr />
    {!! Form::open(['route' => ['articles.show', $article], 'method' => 'GET', 'accept-charset' => 'ISO-8859-1']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titulo: '.$article->title) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Categoria: '.$article->category->name) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Contenido:') !!}
            <br />
            {!! $article->content !!}
        </div>
        <div class="form-group">
            {!! Form::label('tags', 'Etiquetas:') !!}
            <br />
            @foreach($my_tags as $my_tag)
                {!! Form::label('', $my_tag) !!}
                <br />
            @endforeach
        </div>
        <div class="form-group">
            {!! Form::label('images', 'Imagenes:') !!}
            <br />
            @foreach($my_images as $my_image)
                <img width="400" height="300" src="{{ '../../images/articles/'.$my_image }}" />
                <br />
            @endforeach
        </div>
    {!! Form::close() !!}
@endsection
