        <h1 class="my-4">Categorías</h1>
        <div class="list-group">
            @foreach($categories as $category)
                <a href="{{  route('front.search.category', $category->name) }}" class="list-group-item">{{ $category->name . ' (' . $category->articles->count() . ')' }}</a>
            @endforeach
        </div>

        <div class="card my-4">
          <h5 class="card-header">Etiquetas</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                    @foreach($tags as $tag)
                        <li>
                            <a href="{{ route('front.search.tag', $tag->name) }}">{{ $tag->name }}</a>
                        </li>
                    @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>