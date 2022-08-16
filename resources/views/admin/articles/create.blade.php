@extends("admin.template.main")

@section("title", "Crear Artículo")

@section("css")
    <link href="{{ asset('plugins/jQuery-File-Upload/css/jquery.fileupload.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/jQuery-File-Upload/css/jquery.fileupload-ui.css') }}" rel="stylesheet" type="text/css">
@endsection

@section("content")
    {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'accept-charset' => 'ISO-8859-1', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del Artículo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control simple-tag', 'placeholder' => 'Seleccione Categoría', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Contenido') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control trumbowyg-demo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tags', 'Etiquetas') !!}
            {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Imagen') !!}
            {!! Form::file('image', ['class' => 'btn btn-success fileinput-button']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
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
