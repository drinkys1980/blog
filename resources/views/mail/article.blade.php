<div class="form-group">
    <span>{{ $article->title }}</span>
</div>
<div class="form-group">
    <span>{{ 'Categoria: '.$article->category->name }}</span>
</div>
<div class="form-group">
    <span>{{ 'Contenido:' }}</span>
    <br />
    {!! $article->content !!}
</div>
<div class="form-group">
    <span>{{ 'Etiquetas:' }}</span>
    <br />
    @foreach($article->tags->pluck('name') as $my_tag)
        {!! $my_tag !!}
        <br />
    @endforeach
</div>
<div class="form-group">
    <span>{{ 'Imagenes:' }}</span>
    <br />
    @foreach($article->images->pluck('name') as $my_image)
        <img width="400" height="300" src="{{ '../../../images/articles/'.$my_image }}" />
        <br />
    @endforeach
</div>
