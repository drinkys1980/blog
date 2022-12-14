@extends('front.template.main')

@section('content')

    <div class="row">

      <div class="col-lg-3">

          @include('front.partials.aside')

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
            @foreach($articles as $article)
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    @foreach($article->images as $image)
                        <a href="{{ route('front.view.article', $article->slug) }}">
                          <img class="card-img-top" src="{{ '../images/articles/'.$image->name }}" alt="">
                        </a>
                    @endforeach
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="{{ route('front.view.article', $article->slug) }}">{{ $article->title }}</a>
                      </h4>
                      <h5><a href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a></h5>
                    </div>
                    <div class="card-footer">
                      <h5>{{ $article->created_at->diffForHumans() }}</h5>
                    </div>
                  </div>
                </div>
            @endforeach

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
    <div class="text-center">
        {!! $articles->render() !!}
    </div>
@endsection