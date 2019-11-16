<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Téléchargement Plex</title>
    <link rel="icon" type="image/png" href="https://zhf1943ap1t4f26r11i05c7l-wpengine.netdna-ssl.com/wp-content/themes/plex/assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="stylesheet" href="{{ asset('css/library/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')

</head>
<body>
    @yield('content')
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/library/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/library/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/download.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/files.js') }}"></script>
    @yield('javascripts')
</body>
</html>
