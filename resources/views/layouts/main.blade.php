<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="css/style.css"> -->


    </head>
    <body>
        @yield('content')

        <footer>
            <p>Jonas B. Franco - TI - Colombo Agroindustria &copy; 2021</p>
        </footer>
        <script src="js/script.js"></script>
    </body>
</html>
