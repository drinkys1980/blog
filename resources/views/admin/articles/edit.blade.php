@extends("admin.template.main")

@section("title", "Editar Articulo " . $article->title)

@section("content")
    {!! Form::open(['route' => ['articles.update', $article], 'method' => 'PUT', 'accept-charset' => 'ISO-8859-1']) !!}


        <div class="form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Título del Artículo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control simple-tag', 'placeholder' => 'Seleccione Categoría', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Contenido') !!}
            {!! Form::textarea('content', $article->content, ['class' => 'form-control trumbowyg-demo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tags', 'Etiquetas') !!}
            {!! Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection

@section('js')
    <script>
        $(".select-tag").chosen({placeholder_text_multiple:'Seleccione un máximo de 3 tags',
            max_selected_options:3,
            search_contains: true,
            no_results_text: 'no se encontraron estos tags'
        });
        $(".simple-tag").chosen({placeholder_text_single:'Seleccione categoria',
            search_contains: true,
            no_results_text: 'no se encontraron estos tags'
        });
        $('.trumbowyg-demo').trumbowyg({
            autogrow: true
        });
    </script>
@endsection