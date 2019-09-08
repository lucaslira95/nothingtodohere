<!doctype html>
<html lang="en">
    <head>
        @include('meta_tags')
        @include('css_imports')
        <title>Nothing to do here</title>
        <link href="{{ secure_asset('css/index.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('navbar')
        
        <div id="principal">Nothing to do here</div>
        
        @include('js_imports')
    </body>
</html>