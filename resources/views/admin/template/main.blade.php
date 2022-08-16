<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="ISO-8859-1">
        <title>@yield('title', 'Default') | Panel de Administración</title>
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/chosen/chosen.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/trumbowyg/dist/ui/trumbowyg.css') }}" rel="stylesheet" type="text/css">
        @yield('css')
    </head>
    <body class="admin-body">
        @include("admin.template.partials.nav")
        <section class="section-admin">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> @yield('title') </h3>
                </div>
            </div>
            <div class="panel-body">
                @include("flash::message")
                @include('admin.template.partials.errors')
                @yield("content")
            </div>
        </section>
        <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}">
        </script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}">
        </script>
        <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}">
        </script>
        <script src="{{ asset('plugins/trumbowyg/dist/trumbowyg.js') }}">
        </script>
        <script src="{{ asset('plugins/trumbowyg/dist/langs/es.js') }}">
        </script>
        @yield('js');
    </body>
</html>
