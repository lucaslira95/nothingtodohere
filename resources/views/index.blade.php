<!doctype html>
<html lang="en">
    <head>
        @include('meta_tags')
        @include('css_imports')
        <link href="{{ secure_asset('css/index.css') }}" rel="stylesheet">
        <title>Nothing to do here</title>
    </head>
    <body id="wrapper">
        @include('navbar')
        <div id="dynamic">
            @include('principal')
        </div>

        @include('js_imports')

    </body>
</html>