@extends("admin.template.main")

@section("title", "Listado de Imágenes")

@section("content")
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img class="img-responsive" src="/images/articles/{{ $image->name }}" width="300" height="300" />
                    </div>
                </div>
                <div class="panel-footer">{{ $image->article->title }}</div>
            </div>
        @endforeach
    </div>
@endsection
