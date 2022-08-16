@extends("admin.template.main")

@section("title", "Enviar Articulo " . $article->title)

@section("content")
    <a href="{{ route('articles.index') }}" class="btn btn-info">Devolver a página anterior</a><hr />
    {!! Form::open(['url' => '/admin/articles/'.$article->id.'/sendEmail', 'method' => 'POST', 'accept-charset' => 'ISO-8859-1']) !!}
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
                <img width="400" height="300" src="{{ '../../../images/articles/'.$my_image }}" />
                <br />
            @endforeach
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico') !!}
            {!! Form::email('email', Auth::user()->email, ['class' => 'form-control', 'min:1|email|required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Enviar Correo', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
