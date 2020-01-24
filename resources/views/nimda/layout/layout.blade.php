<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestion Arcoch</title>
    @include('layout.favicon')
    <link rel="stylesheet" href="{{ asset('admin/css/library/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    @yield('css')
    <script type="text/javascript" src="{{ asset('admin/js/library/jquery-3.3.1.min.js') }}"></script>
    @yield('javascript-header')
</head>
<body>
    @yield('content')
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('admin/js/library/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('javascripts')
</body>
</html>
