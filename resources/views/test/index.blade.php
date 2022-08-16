<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="iso 8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $article -> title }}</title>

        <!-- Fonts -->
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/general.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>{{ $article -> title }}</h1>
        <hr />
        {{ $article -> content }}
        <hr />
        {{ $article -> user -> name }} | {{ $article -> category -> name }} | 
        @foreach($article->tags as $tag)
            {{ $tag->name }}
        @endforeach
    </body>
</html>
