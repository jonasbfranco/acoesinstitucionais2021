{{-- Guardar e recuperar COOKIE --}}
@php
    @$themeClass = '';
    @$btnClass = '';
    if (!empty($_COOKIE['theme'])) {
        if ($_COOKIE['theme'] == 'dark') {
            $themeClass = 'dark';
            $btnClass = 'active';
        } else if ($_COOKIE['theme'] == 'light') {
            $themeClass = 'light';
            $btnClass = 'noactive';
        }
    }
@endphp



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Dark Mode User --}}
        <meta name="color-scheme" content="dark light">

        <title>@yield('title')</title>

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="../public/css/estilos.css">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" crossorigin="anonymous" />

        <!-- Upload Progress Bar -->
        {{-- <script src="http://malsup.github.com/jquery.form.js"></script> --}}


    </head>
    <body class="<?= @$themeClass; ?>">

        <div class="flex-toggle">
            <div class="position-absolute top-0 end-0 p-2 tema-dark">
                <button class="switch <?= @$btnClass; ?>" id="switch">
                    <span><i class="fas fa-sun"></i></span>
                    <span><i class="fas fa-moon"></i></span>
                </button>
            </div>
        </div>

        @yield('content')

        <footer>
            <p>Jonas B. Franco - TI - Colombo Agroindustria &copy; 2021</p>
        </footer>
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        <script src="../public/js/script.js"></script>
    </body>
</html>
