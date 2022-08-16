@extends('front.template.main')

@section('title', $article->title)

@section('content')

    <div class="row">

      <div class="col-lg-3">

          @include('front.partials.aside')

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">
            <div class="col-lg-12 col-md-12 mb-12">
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
                  <p class="card-text">{!! $article->content !!}</p>
                </div>
                <div class="card-footer">
                  <h5>{{ $article->created_at->diffForHumans() }}</h5>
                </div>
              </div>
            </div>

        </div>
        <!-- /.row -->

        <div id="disqus_thread"></div>
        <script>

          /**
          *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
          *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = 'https://taikimizuno.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
              })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

      </div>
      <!-- /.col-lg-9 -->

    </div>
@endsection