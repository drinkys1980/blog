<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @guest
     <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
      </li>
    </ul>
    @else
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.index') }}">Inicio<span class="sr-only">(current)</span></a>
      </li>
      @if(Auth::user()->isAdmin())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">Categorías</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tags.index') }}">Tags</a>
          </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.index') }}">Artículos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.images.index') }}">Imagenes</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}">Salir</a>
          <a class="dropdown-item" target="_blank" href="{{ route('front.index') }}">Página Principal</a>
        </div>
      </li>
    </ul>
    @endguest
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>