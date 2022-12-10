<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Savic</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <div class="_welcome ">
            <div class="shrink-0 flex items-center">
                <section class="form-section">
                    @yield('content')
                </section>
            </div>
        </div>
    </body>
</html>
