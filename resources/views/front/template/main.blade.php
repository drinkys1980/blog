<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

  <meta charset="ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
  

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

  @include('front.template.partials.header')

  <!-- Page Content -->
  <div class="container">

    @yield('content')

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
